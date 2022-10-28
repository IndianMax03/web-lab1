<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Лабораторная №1</title>
    <style>
        @import url('styles/Index.css');
    </style>
</head>

<body>
<!-- Табличная вёрстка -->
<table id="layout">
    <!-- Первая строка - заголовок -->
    <tr>
        <td colspan="2" id="cap">
            <div id="capBlock">
                <?php require "forms/Header.php" ?>
            </div>
        </td>
    </tr>
    <!-- Вторая строка - Данные для ввода, график и кнопка подтверждения -->
    <tr>
        <!-- Форма для отправки GET запроса на сервер (target показывает, как форма будет открываться) -->
        <form id="mainForm" action="forms/Form.php" method="get" target="forms/Form.php">
            <!-- Столбик выбором данных (X, Y, R) -->
            <td id="data">
                <!-- Таблица: одна строка, три столбца (данные) -->
                <table id="dataTable">
                    <tr>
                        <!-- 1 столбик - координата X -->
                        <td>
                            <fieldset id="xFieldSet">
                                <legend id="xLegend">
                                    <b>Выберите координату X</b>
                                </legend>
                                <div class="radioX">
                                    <input id="x2" type="radio" name="xCoordinate" value="2" class="xBtn">
                                    <label for="x2">2</label>
                                </div>
                                <br>
                                <div class="radioX">
                                    <input id="x1.5" type="radio" name="xCoordinate" value="1.5" class="xBtn">
                                    <label for="x1.5">1.5</label>
                                </div>
                                <br>
                                <div class="radioX">
                                    <input id="x1" type="radio" name="xCoordinate" value="1" class="xBtn">
                                    <label for="x1">1</label>
                                </div>
                                <br>
                                <div class="radioX">
                                    <input id="x0.5" type="radio" name="xCoordinate" value="0.5" class="xBtn">
                                    <label for="x0.5">0.5</label>
                                </div>
                                <br>
                                <div class="radioX">
                                    <input id="x0" type="radio" name="xCoordinate" value="0" class="xBtn">
                                    <label for="x0">0</label>
                                </div>
                                <br>
                                <div class="radioX">
                                    <input id="x-0.5" type="radio" name="xCoordinate" value="-0.5" class="xBtn">
                                    <label for="x-0.5">-0.5</label>
                                </div>
                                <br>
                                <div class="radioX">
                                    <input id="x-1" type="radio" name="xCoordinate" value="-1" class="xBtn">
                                    <label for="x-1">-1</label>
                                </div>
                                <br>
                                <div class="radioX">
                                    <input id="x-1.5" type="radio" name="xCoordinate" value="-1.5" class="xBtn">
                                    <label for="x-1.5">-1.5</label>
                                </div>
                                <br>
                                <div class="radioX">
                                    <input id="x-2" type="radio" name="xCoordinate" value="-2" class="xBtn">
                                    <label for="x-2">-2</label>
                                </div>
                            </fieldset>
                        </td>
                        <!-- 2 столбик - координата Y -->
                        <td colspan="2">
                            <label for="yText">
                                <b>Введите координату Y:</b>
                            </label>
                            <p>
                                <input id="yText" name="yCoordinate" type="text" maxlength="10" placeholder="-5 ... 3">
                            </p>
                            <span role="alert" id="yNameError"></span>
                        </td>
                        <!-- 3 столбик - значение радиуса R -->
                        <td>
                            <fieldset id="rFieldSet">
                                <legend id="rLegend">
                                    <b>Выберите радиус R</b>
                                </legend>
                                <div class="radioR">
                                    <input id="r5" type="radio" name="radius" value="5" class="rBtn">
                                    <label for="r5">5</label>
                                </div>
                                <br>
                                <div class="radioR">
                                    <input id="r4" type="radio" name="radius" value="4" class="rBtn">
                                    <label for="r4">4</label>
                                </div>
                                <br>
                                <div class="radioR">
                                    <input id="r3" type="radio" name="radius" value="3" class="rBtn">
                                    <label for="r3">3</label>
                                </div>
                                <br>
                                <div class="radioR">
                                    <input id="r2" type="radio" name="radius" value="2" class="rBtn">
                                    <label for="r2">2</label>
                                </div>
                                <br>
                                <div class="radioR">
                                    <input id="r1" type="radio" name="radius" value="1" class="rBtn">
                                    <label for="r1">1</label>
                                </div>
                                <br>
                            </fieldset>
                        </td>
                    </tr>
                </table>
            </td>
            <!-- Столбик с отображением графика и кнопки -->
            <td id="visualisation">
                <!-- Картинка графика -->
                <article>
                    <figure id="areaImg">
                        <img id="graphImg" src="images/Area.png" alt="Изображение не найдено">
                        <figcaption>
                            <b>
                                <span id="imgLabel">График области</span>
                            </b>
                            <br><br>
                        </figcaption>
                    </figure>
                </article>
                <!-- Кнопка "submit" -->
                <p>
                    <input id="accButton" type="submit" value="Отправить данные на проверку">
                </p>
                <span role="alert" id="sendingError"></span>
            </td>
        </form>
    </tr>
</table>
<script language="YoptaScript">
несомненно rebenok стать -5 полно
несомненно starec стать 3 полно

poimkaRasputnici("#yText").покаместПишете стать primiteZamechanie полно
poimkaRasputnici("#yText").веяниеПеремен стать primiteZamechanie полно
позвольте zamechanie полно

логика primiteZamechanie() доброго
    zamechanie стать poimatBeglecaY() полно
    poimkaRasputnici("#yNameError").береста стать zamechanie полно
здравия

krestianin("mainForm").приставитьСтражу("submit", (gramota) исполнять доброго

    позвольте yZamechanie стать poimatBeglecaY() полно
    позвольте xZamechanie стать poimatBeglecaX() полно
    позвольте rZamechanie стать poimatBeglecaR() полно

    позвольте kolkosti стать (yZamechanie + xZamechanie + rZamechanie филькинаГрамотастатьстать "" ? "Ошибка отправки: " : "") +
        (xZamechanie статьстатьстать "" ? xZamechanie : xZamechanie + "; ") +
        (yZamechanie статьстатьстать "" ? yZamechanie : yZamechanie + "; ") +
        (rZamechanie статьстатьстать "" ? rZamechanie : rZamechanie + "; ") полно
    poimkaRasputnici("#sendingError").береста стать kolkosti полно

    ежели (kolkosti.масштаб пуще 0) доброго
        gramota.опешитеМолодец() полно
    здравия
здравия) полно

логика poimatBeglecaY() доброго

    позвольте yKrestianin стать poimkaRasputnici("#yText").пашпорт полно

    ежели (yKrestianin.бартер(/\s/g, "") статьстатьстать "" али yKrestianin статьстатьстать "") доброго
        примите "Y не может быть пустым" полно
    здравия

    yKrestianin стать yKrestianin.скоситьСерпом() полно

    ежели (филькинаГрамота(/^-?\d*[.,]?\d+$/.окинутьВзором(yKrestianin))) доброго
        примите "Y - десятичное число" полно
    здравия
    ежели (yKrestianin дохлее rebenok али yKrestianin пуще starec) доброго
        примите rebenok + " <= Y <= " + starec полно
    здравия
    ежели (yKrestianin.масштаб пуще 10) доброго
        примите "Длина поля Y < 11" полно
    здравия

    примите "" полно
здравия

логика poimatBeglecaX() доброго
    позвольте xObshina стать kresianinPoPashportu("xBtn") полно
    позвольте xVreditel полно
    вПоход (позвольте krestianin стать 0 полно krestianin дохлее xObshina.масштаб полно krestianin++) доброго
        ежели (xObshina[krestianin].числится) доброго
            xVreditel стать xObshina[krestianin].пашпорт полно
            окатитесь полно
        здравия
    здравия
    ежели (неИзБуквицы(xVreditel)) доброго
        примите "Не выбран X" полно
    здравия супротивСего доброго
        примите "" полно
    здравия
здравия

логика poimatBeglecaR() доброго
    позвольте rObshina стать kresianinPoPashportu("rBtn") полно
    позвольте rVreditel полно
    вПоход (позвольте krestianin стать 0 полно krestianin дохлее rObshina.масштаб полно krestianin++) доброго
        ежели (rObshina[krestianin].числится) доброго
            rVreditel стать rObshina[krestianin].пашпорт полно
            окатитесь полно
        здравия
    здравия
    ежели (неИзБуквицы(rVreditel)) доброго
        примите "Не выбран R" полно
    здравия супротивСего доброго
        примите "" полно
    здравия
здравия

логика poimkaRasputnici(rasputnica) доброго
    примите манускрипт.пойматьРаспутницу(rasputnica) полно
здравия

логика krestianin(krestianin) доброго
    примите манускрипт.определитьКрестьянинаПоПашпорту(krestianin) полно
здравия

логика kresianinPoPashportu(krestianin) доброго
    примите манускрипт.определитьКрестьянинаПоОбщине(krestianin) полно
здравия

</script>
<script src="YoptaScript.js"></script>
</body>

</html>