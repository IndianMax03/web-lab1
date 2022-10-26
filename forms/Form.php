<?php
include "../business_logic/Row.php";
include "../business_logic/FileWorker.php";

date_default_timezone_set("Europe/Moscow");

$start_time = $_SERVER["REQUEST_TIME_FLOAT"];
$x = $_GET["xCoordinate"];
$y = $_GET["yCoordinate"];
$r = $_GET["radius"];

function funcXYR($x, $y, $r) {
    if ($x >= 0) { //  right side
        if ($y >= 0) { //  up
            return $x <= $r/2 && $y <= $r;
        } else { //  down
            return false;
        }
    } else { //  left side
        if ($y >= 0) { //  up
            return $x**2 + $y**2 <= $r**2;
        } else { //  down
            return $y >= -$x - $r/2;
        }
    }
}

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
                $table = new FileWorker();
                $data = $table -> getRows();
                if (count($data) > 0) {
                for ($i = 0; $i < count($data); $i++) {
                    $row = $data[$i];
                    ?>
                    <tr>
                        <td><?php echo $row -> getX() ?></td>
                        <td><?php echo $row -> getY() ?></td>
                        <td><?php echo $row -> getR() ?></td>
                        <td><?php echo $row -> getHit() ? "Попал(-а)" : "Не попал(-а)" ?></td>
                        <td><?php echo $row -> getScriptTime() . " мкс" ?></td>
                        <td><?php echo $row -> getCurTime() . " МСК" ?></td>
                    </tr>
                <?php }
                }
                $newRow = new Row($x, $y, $r, funcXYR($x, $y, $r));
                $stop_time = microtime(true);
                $scriptTime = round(($stop_time - $start_time) * 10**6);
                $newRow -> setTime($scriptTime, $stop_time);
                $table -> addRow($newRow);
                $rows = $table -> getRows();
                ?>
                <tr>
                    <td><?php echo $newRow -> getX() ?></td>
                    <td><?php echo $newRow -> getY() ?></td>
                    <td><?php echo $newRow -> getR() ?></td>
                    <td><?php echo $newRow -> getHit() ? "Попал(-а)" : "Не попал(-а)" ?></td>
                    <td><?php echo $newRow -> getScriptTime() . " мкс" ?></td>
                    <td><?php echo $newRow -> getCurTime() . " МСК" ?></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>

</html>