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

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">Панель администрирования</div> -->

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
                        <li><a href="/news">Новости отделения</a></li>
                        <li><a href="">Учебно-методическая работа</a></li>
                        <li><a href="">Воспитательная работа</a></li>
                        <li><a href="">Преподавательский состав</a></li>
                        <li><a href="">Расписание занятий</a></li>
                        <li class="active"><a href="/galery">Фотогалерея</a></li>
                        <li><a href="/board">Доска почёта</a></li>
                        <li><a href="">Сведения об образовательной организации</a></li>
                        <li><a href=""><script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
                            <script type="text/javascript">
                              VK.init({apiId: 6780653});
                            </script>

                            <!-- VK Widget -->
                            <div id="vk_auth"></div>
                            <script type="text/javascript">
                              VK.Widgets.Auth("vk_auth", {"onAuth":"function(data) {alert('user '+data['uid']+' authorized');}"});
                            </script>
                        </a></li>
                    </ul>
                </div>
                <section class="tabs__content">
                    <h1>ЭЛЕМЕНТ 1ЙУЦАУЙЦПЙУПЙ</h1>
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
                <section class="tabs__content active">
                    <form action="" method="post" id="photogalery-form" class="flex">
                        <h1>Заголовок</h1>
                        <input type="text" class="formitem">
                        <h1>Фотографии</h1>
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
