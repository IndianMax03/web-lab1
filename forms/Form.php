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
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>true</td>
                    <td>15мс</td>
                    <td>21112003</td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- Третья строка - кнопка возврата -->
    <tr>
        <td>
            <button id="accButton">Вернуться</button>
        </td>
    </tr>
</table>
</body>

</html>