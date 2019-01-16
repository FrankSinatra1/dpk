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
            <a href="/" style="font-weight: 500;">На главную</a>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                Админ: <strong>{{ Auth::user()->name}}</strong>

                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Выйти
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    
        <div class="wrap-container">
            <div class="section-one flex tabs">
                <div class="section-one__menu">
                    <p class="titleSection">Меню</p>
                    <ul class="tabs__caption">
                        <li class="active"><a href="/news">Новости отделения</a></li>
                        <li><a href="/teacher">Преподавательский состав</a></li>
                        <li><a href="">Расписание занятий</a></li>
                        <li><a href="/galery">Фотогалерея</a></li>
                        <li><a href="/board">Доска почёта</a></li>
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
                    <form action="{{ route('teacher.create') }}" method="post"  class="flex photogalery-form" enctype="multipart/form-data">
                        <h1>Фамилия И.О</h1>
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
                    <h1>Расписание</h1>
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
            </div>
        </div>

        <script src="{{ URL::asset('js/jq.min.js') }}"></script>
        <script src="{{ URL::asset('js/adminjs.js') }}"></script>
    </body>
</html>
