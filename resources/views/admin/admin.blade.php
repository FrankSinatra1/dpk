<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Отделение "Программирования"</title>
        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admincss.css') }}">
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
                        <li class="active"><a href="/news">Новости отделения</a></li>
                        <li><a href="">Учебно-методическая работа</a></li>
                        <li><a href="">Воспитательная работа</a></li>
                        <li><a href="">Преподавательский состав</a></li>
                        <li><a href="">Расписание занятий</a></li>
                        <li><a href="/galery">Фотогалерея</a></li>
                        <li><a href="/board">Доска почёта</a></li>
                        <li><a href="">Сведения об образовательной организации</a></li>
                    </ul>
                </div>
                <section class="tabs__content active">
                    <form action="{{ route('news.create') }}" method="post" enctype="multipart/form-data">
                        <h1>Заголовок</h1>
                        <input type="text" class="formitem" name="title">
                        <h1>Фотография</h1>
                        <div class="wrap-file-add flex">
                            <div class="file-add flex">
                                <label for="tinputnews" class="labelFile">Добавить фото</label>
                                <input name="photo" type="file" class="tinput" id="tinputnews" hidden="" multiple="multiple" accept=".txt,image/*">
                            </div>
                        </div>
                        <h1>Основной текст</h1>
                        <input type="text" class="formitem" name="text"><br>
                        <input type="submit" value="Добавить" class="formsubmit">
                        {{ csrf_field() }}
                    </form>
                </section>
                <section class="tabs__content">
                    <h1>ЭЛЕМЕНТ 2ЦЙПЙЦПЙЦ</h1>
                </section>
                <section class="tabs__content">
                    <h1>ЭЛЕМЕНТ 3ЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙЙ</h1>
                </section>
                <section class="tabs__content">
                    <h1>ЭЛЕМЕНТ 1ЙУЦАУЙЦПЙУПЙ</h1>
                </section>
                <section class="tabs__content">
                    <h1>ЭЛЕМЕНТ 2ЦЙПЙЦПЙЦ</h1>
                </section>
                <section class="tabs__content">
                    <form action="{{ route('gallery.create') }}" method="post" class="flex photogalery-form" enctype="multipart/form-data">
                        <h1>Заголовок</h1>
                        <input type="text" class="formitem" name="title">
                        <h1>Фотографии</h1>
                        <div class="wrap-file-add flex">
                            <div class="file-add flex">
                                <label for="tinput" class="labelFile">Добавить фото</label>
                                <input name="photo" type="file" class="tinput" id="tinputgallery" hidden="" multiple="multiple" accept=".txt,image/*">
                            </div>
                        </div>
                        <input type="submit" value="Добавить" class="formsubmit">
                        {{ csrf_field() }}
                    </form>
                </section>
                <section class="tabs__content">
                    <form action="{{ route('board.create') }}" method="post"  class="flex photogalery-form" enctype="multipart/form-data">
                        <h1>Группа, Фамилия ИО</h1>
                        <input type="text" class="formitem" name="name">
                        <h1>Фотография</h1>
                        <div class="wrap-file-add flex">
                            <div class="file-add flex">
                                <label for="tinputboard" class="labelFile">Добавить фото</label>
                                <input name="photo" type="file" class="tinput" id="tinputboard" hidden="" multiple="multiple" accept=".txt,image/*">
                            </div>
                        </div>
                        <input type="submit" value="Добавить" class="formsubmit">
                        {{ csrf_field() }}
                    </form>
                </section>
                <section class="tabs__content">
                    <h1>ЭЛЕМЕНТ ааацайй</h1>
                </section>
            </div>
        </div>

        <script src="{{ URL::asset('js/jq.min.js') }}"></script>
        <script src="{{ URL::asset('js/adminjs.js') }}"></script>
    </body>
</html>