<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Сантех-сервис</title>
        <link rel="stylesheet" href="./css/app.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>

    <div class="header">
        <div class="slider header__slider" data-images="santex-image-1.jpg,santex-image-2.jpg,santex-image-3.jpg">
        </div>
        <div class="wrapper header__wrapper">
            <h1 class="title header__title">РАБОТЫ ПО МОНТАЖУ САНТЕХНИЧЕСКИХ СИСТЕМ В г. КРАСНОДАР</h1>
        </div>
    </div>

    <div class="content">
        <div class="wrapper content__wrapper">
            <h2 class="title-h2 content__title-h2">МОНТАЖ СИСТЕМ ОТОПЛЕНИЯ И ВОДОСНАБЖЕНИЯ В КВАРТИРАХ И ЧАСТНЫХ ДОМАХ.</h2>
            <h3 class="title-h3 content__title-h3">ПЕРЕЧЕНЬ РАБОТ:</h3>
            <ul class="service-list content__service-list">
                <li>Монтаж отопления, установка радиаторов</li>
                <li>Монтаж водоснабжения, разводка холодной и горячей воды</li>
                <li>Монтаж внутренней и наружной канализации</li>
                <li>Монтаж теплых полов</li>
                <li>Монтаж магистралей отопления и ГВС в цоколе и тех.этаже(чердак)</li>
                <li>Замена труб водоснабжения и канализации</li>
                <li>Замена труб водоснабжения и канализации</li>
                <li>Установка унитазов, ванн, душевых кабин, моек, умывальников, смесителей</li>
            </ul>
            <p>
                БРИГАДА КВАЛИФИЦИРОВАННЫХ РАБОЧИХ ОКАЖЕТ КАЧЕСТВЕННЫЕ УСЛУГИ С ПРЕДОСТАВЛЕНИЕМ ГАРАНТИЙ НА ВСЕ ВИДЫ РАБОТ.
                ВЫПОЛНЯЕМ РАЗВОДКУ СТАЛЬНЫМИ , МЕТАЛЛОПЛАСТИКОВЫМИ, ПОЛИПРОПИЛЕНОВЫМИ ТРУБАМИ.
                ВЫПОЛНЯЕМ МОНТАЖ КАНАЛИЗАЦИИ ИЗ ПОЛИПРОПИЛЕНОВЫХ И ЧУГУННЫХ ТРУБ.
            </p>
            <ul class="contact-list content__contact-list">
                <li>+79182621265</li>
                <li>+79180289315</li>
                <li>+79676718400</li>
            </ul>
        </div>
    </div>

    <footer class="footer">
        <div class="wrapper">
            <span>г. Краснодар {{  date("Y") }}</span>
        </div>
    </footer>

    <script src="./js/app.js"></script>
    </body>
</html>
