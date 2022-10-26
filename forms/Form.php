<?php
include "../business_logic/Row.php";
date_default_timezone_set("Europe/Moscow");
$start_time = $_SERVER["REQUEST_TIME_FLOAT"];

if ($_SERVER["REQUEST_METHOD"] != "GET") {
    require "BadMethod.php";
    exit();
} elseif (!isset($_GET["cleaning"]) && (empty($_GET["xCoordinate"]) || empty($_GET["yCoordinate"]) || empty($_GET["radius"]) || !Row::validateParams($_GET["xCoordinate"], $_GET["yCoordinate"], $_GET["radius"]))) {
    require "BadRequest.php";
    exit();
}
global $arrayTable;
if (!isset($_GET["cleaning"])) {
    $x = $_GET["xCoordinate"];
    $y = $_GET["yCoordinate"];
    $y = str_ireplace(",", ".", $y);
    $r = $_GET["radius"];

    $row = new Row($x, $y, $r);
    $stop_time = microtime(true);
    $scriptTime = round(($stop_time - $start_time) * 10 ** 6);
    $row->setTime($scriptTime, $stop_time);

    if (isset($_COOKIE["table"])) {
        $arrayTable = json_decode($_COOKIE["table"], true);
    }
    $arrayTable[] = $row->getArray();
}

setcookie("table", json_encode($arrayTable));

?>
<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Таблица попадания</title>
    <style>
        @import url('../styles/Index.css');
        @import url('../styles/Form.css');
    </style>
</head>

<body>
<!-- Табличная вёрстка -->
<table id="layout">
    <!-- Первая строка - заголовок -->
    <tr>
        <td id="cap">
            <div id="capBlock">
                <?php require "Header.php" ?>
            </div>
        </td>
    </tr>
    <!-- Вторая строка - таблица с данными -->
    <tr>
        <td>
            <table id="dataTable">
                <tr id="capRow">
                    <td>X</td>
                    <td>Y</td>
                    <td>R</td>
                    <td>Попадание</td>
                    <td>Время работы скрипта</td>
                    <td>Текущее время</td>
                </tr>
                <?php
                if (isset($arrayTable)) {
                    foreach ($arrayTable as $row) { ?>
                        <tr>
                            <td><?php echo $row["x"] ?></td>
                            <td><?php echo $row["y"] ?></td>
                            <td><?php echo $row["r"] ?></td>
                            <td><?php echo $row["hit"] ? "Попадание" : "Промах" ?></td>
                            <td><?php echo $row["scriptTime"] . " мкс" ?></td>
                            <td><?php echo date("H:i:s", $row["curTime"]) . " по МСК" ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <form action="Form.php" method="get">
                <input id="accButton" type="submit" name="cleaning" value="Очистить">
            </form>
        </td>
    </tr>
</table>
</body>

</html>