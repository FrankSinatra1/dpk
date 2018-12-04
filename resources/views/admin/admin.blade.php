<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Колледж</title>
        <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/admincss.css') }}">
    </head>
    <body class="body">
        <header class="header flex">
            <p>Панель администрирования</p>
        </header>
    
        <div class="wrap-container">
            <div class="section-one flex tabs">
                <div class="section-one__menu">
                    <p class="titleSection">Меню</p>
                    <ul class="tabs__caption">
                        <li><a href="/news">Новости отделения</a></li>
                        <li><a href="">Учебно-методическая работа</a></li>
                        <li><a href="">Воспитательная работа</a></li>
                        <li><a href="">Преподавательский состав</a></li>
                        <li><a href="">Расписание занятий</a></li>
                        <li class="active"><a href="/galery">Фотогалерея</a></li>
                        <li><a href="/board">Доска почёта</a></li>
                        <li><a href="">Сведения об образовательной организации</a></li>
                    </ul>
                </div>
                <section class="tabs__content">
                    <p>ЭЛЕМЕНТ 1ЙУЦАУЙЦПЙУПЙ</p>
                </section>
                <section class="tabs__content">
                    <p>ЭЛЕМЕНТ 2ЦЙПЙЦПЙЦ</p>
                </section>
                <section class="tabs__content">
                    <p>ЭЛЕМЕНТ 3ЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙ</p>
                </section>
                <section class="tabs__content">
                    <p>ЭЛЕМЕНТ 1ЙУЦАУЙЦПЙУПЙ</p>
                </section>
                <section class="tabs__content">
                    <p>ЭЛЕМЕНТ 2ЦЙПЙЦПЙЦ</p>
                </section>
                <section class="tabs__content active">
                    <form action="" method="post" id="photogalery-form" class="flex">
                        <p>Заголовок</p>
                        <input type="text" class="formitem">
                        <p>Фотографии</p>
                        <div class="wrap-file-add flex">
                            <div class="file-add flex">
                                <label for="tinput" class="labelFile">Добавить фото</label>
                                <input name="imgfile" type="file" class="tinput" id="tinput" hidden="" multiple="multiple" accept=".txt,image/*">
                            </div>
                        </div>
                        <input type="submit" value="Добавить" class="formsubmit">
                    </form>
                </section>
            </div>
        </div>

        <script src="{{ URL::asset('js/jq.min.js') }}"></script>
        <script src="{{ URL::asset('js/adminjs.js') }}"></script>
    </body>
</html>