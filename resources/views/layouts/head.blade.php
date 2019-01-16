<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Отделение "Программирования"</title>
        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    </head>
    <body class="body">

       <header class="header flex">
            <div class="logo">
                <a href="/" class="flex">
                    <img src="{{ asset('img/logo.svg') }}" alt="">
                    <span>Отделение "Программирования"</span>
                </a>
            </div>
            <div class="listMenu">
                <ul class="flex">
                    <li><a href="/">Главная</a></li>
                    <li><a href="">Об отделении</a>
                        <ul>
                            <li><a href="">Что-то такое</a></li>
                            <li><a href="">Даблшев</a></li>
                        </ul>
                    </li>
                    <li><a href="">Студенту</a></li>
                    <li><a href="">Контакты</a></li>
                    <li><a href="" class="popup">Обратная связь</a></li>
                    <li class="search flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="svgsearch" viewBox="0 0 20.751 20.751">
                          <path id="Path_3" data-name="Path 3" class="cls-1" d="M20.608,19.518,15.38,14.29a.481.481,0,0,0-.344-.142h-.417a8.345,8.345,0,1,0-.47.474v.413a.5.5,0,0,0,.142.344l5.228,5.228a.487.487,0,0,0,.689,0l.4-.4A.487.487,0,0,0,20.608,19.518ZM8.43,15.785A7.476,7.476,0,0,1,1.117,8.43,7.493,7.493,0,0,1,8.43,1.055,7.539,7.539,0,0,1,15.794,8.43,7.522,7.522,0,0,1,8.43,15.785Z"/>
                        </svg>
                    </li>
                </ul>
            </div>
            <form action="" method="post" class="form-search flex">
                <input type="text" placeholder="Поиск" class="input-search">
                <div class="container-close-search flex">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.962 45.962" class="close-search">
                      <g id="Group_2" data-name="Group 2" transform="translate(-1684.519 -45.019)">
                        <g id="Rectangle_10" data-name="Rectangle 10" class="cls-search" transform="translate(1728.36 45.019) rotate(45)">
                          <rect class="cls-2" width="3" height="62" rx="1.5"/>
                          <rect class="cls-3" x="0.5" y="0.5" width="2" height="61" rx="1"/>
                        </g>
                        <g id="Rectangle_11" data-name="Rectangle 11" class="cls-search" transform="translate(1684.519 47.14) rotate(-45)">
                          <rect class="cls-2" width="3" height="62" rx="1.5"/>
                          <rect class="cls-3" x="0.5" y="0.5" width="2" height="61" rx="1"/>
                        </g>
                      </g>
                    </svg>
                </div>
            </form>
        </header>

        <div class="wrap-container">
            <div class="section-one flex">
                <div class="section-one__menu">
                    <p class="titleSection">Меню</p>
                    <ul>
                        <li><a href="/news">Новости отделения</a></li>
                        <li><a href="/teacher">Преподавательский состав</a></li>
                        <li><a href="/schedule">Расписание занятий</a></li>
                        <li><a href="/galery">Фотогалерея</a></li>
                        <li><a href="/board">Доска почёта</a></li>
                    </ul>
                </div>

                @yield('content')

            </div>

            <footer class="footer flex">
                <div class="footer-text flex">
                    <a href=""><img src="{{ asset('img/logo.svg') }}" alt="" class="footer-logo"></a>
                    <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Алфавит жизни все, lorem мир несколько которое инициал продолжил предупреждал оксмокс семантика над гор составитель заманивший языком бросил большого языкового.</p>
                </div>
                <div class="footer-map">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4701366301792e95943e6aa0c3328c44a5a0ef0062e34fbf334cd043fbcb797f&amp;source=constructor" width="700" height="200" frameborder="0"></iframe>
                </div>
                <div class="footer-contact flex">
                    <p>Связаться с нами:</p>
                    <ul>
                        <li><a href="tel:+7(988)-635-60-93" class="footer-phone flex"><img src="{{ asset('img/phone.svg') }}" alt="">+7(988)-635-60-93</a></li>
                        <li><a href="tel:+7(988)-635-60-93" class="footer-phone flex"><img src="{{ asset('img/phone.svg') }}" alt="">+7(988)-635-60-93</a></li>
                        <li><a href="" class="footer-email flex"><img src="{{ asset('img/email.svg') }}" alt="">rpk_colledge@gmail.com</a></li>
                        <li><a href="" class="footer-inst flex"><img src="{{ asset('img/inst.svg') }}" alt="">rpk_colledge</a></li>
                    </ul>
                </div>
            </footer>
        </div>

        

    <div class="wrapper-popup flex">
        <form action="" method="post" class="popup-form flex">
            <h3>Что вас беспокоит?</h3>
            <div class="close-popup">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.962 45.962" class="close-search">
                  <g id="Group_2" data-name="Group 2" transform="translate(-1684.519 -45.019)">
                    <g id="Rectangle_10" data-name="Rectangle 10" class="cls-search" transform="translate(1728.36 45.019) rotate(45)">
                      <rect class="cls-2" width="3" height="62" rx="1.5"/>
                      <rect class="cls-3" x="0.5" y="0.5" width="2" height="61" rx="1"/>
                    </g>
                    <g id="Rectangle_11" data-name="Rectangle 11" class="cls-search" transform="translate(1684.519 47.14) rotate(-45)">
                      <rect class="cls-2" width="3" height="62" rx="1.5"/>
                      <rect class="cls-3" x="0.5" y="0.5" width="2" height="61" rx="1"/>
                    </g>
                  </g>
                </svg>
            </div>
            <input type="text" placeholder="ФИО" class="formitem" required>
            <input type="email" placeholder="Email" class="formitem" required>
            <textarea name="" id="" placeholder="Текст жалобы" class="formitem" required></textarea>
            <input type="submit" value="Пожаловаться" class="formsubmit">
        </form>
    </div>
        <script src="{{ asset('js/jq.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>