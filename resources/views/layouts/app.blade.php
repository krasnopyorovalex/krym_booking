<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title ?? '' }} | krym-booking.ru</title>
    <meta name="description" content="Связаться с нами info@krasber.ru или +7 (978) 754-74-99.">
    <meta name="theme-color" content="#eceff4">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/favicons/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" sizes="16x16" href="{{ asset('img/favicons/favicon-16x16.png') }}" type="image/png">
    <link rel="icon" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png') }}" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('img/favicons/apple-touch-icon-precomposed.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/favicons/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicons/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicons/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicons/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('img/favicons/apple-touch-icon-167x167.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-touch-icon-180x180.png') }}">
    <link rel="apple-touch-icon" sizes="1024x1024" href="{{ asset('img/favicons/apple-touch-icon-1024x1024.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
</head>
<body>
<main>
    <div class="container-full">
        <div class="sb-left">
            <div class="logo-box">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.svg') }}" alt="logo">
                    <span>[Krym booking]</span>
                </a>
            </div>
            <div class="menu-box">
                <ul class="with-triangle">
                    <li>
                        {{ svg('icon-calendar-date') }}
                        <a href="{{ route('room_categories.index') }}">
                            Шахматка бронирования
                        </a>
                    </li>
                    <li>
                        {{svg('icon-chart')}}
                        <a href="#">
                            Тарифы
                        </a>
                    </li>
                    <li>
                        {{ svg('icon-wallet') }}
                        <a href="#">
                            Документы и оплата
                        </a>
                    </li>
                    <li>
                        {{ svg('icon-chart') }}
                        <a href="#">
                            Отчеты
                        </a>
                    </li>
                    <li{{ menu_box_active('room') }}>
                        {{ svg('icon-key') }}
                        <a href="{{ route('room_categories.index') }}">
                            Настройка номеров
                        </a>
                    </li>
                    <li>
                        {{ svg('icon-cog') }}
                        <a href="#">
                            Настройка гостиницы
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="main">
            <div class="search-box">
                <form action="#" method="get">
                    <div class="group">
                        <input type="text" placeholder="Поиск" minlength="3">
                        {{ svg('icon-search') }}
                    </div>
                </form>
                <div class="search-box-icons">
                    <div class="search-box-icons-item">
                        <a href="#" class="h-icon">
                           {{ svg('icon-help') }}
                        </a>
                    </div>
                    <div class="search-box-icons-item has-board-info">
                        <div class="h-icon">
                            {{ svg('icon-notification') }}
                            <span>9</span>
                        </div>
                        <div class="board-info">
                            <ul class="with-triangle">
                                <li>
                                    <a href="#">
                                        <div class="board-info-icon">
                                            {{ svg('icon-mail') }}
                                        </div>
                                        <div>
                                            Новое бронирование - #21
                                            <div class="board-info-date">2020-06-28 15:34:00</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="board-info-icon">
                                            {{ svg('icon-mail') }}
                                        </div>
                                        <div>
                                            Новое бронирование - #21
                                            <div class="board-info-date">2020-08-19 19:00:05</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="board-info-icon">
                                            {{ svg('icon-mail') }}
                                        </div>
                                        <div>
                                            Новое бронирование - #22
                                            <div class="board-info-date">2020-06-28 12:54:09</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="board-info-icon">
                                            {{ svg('icon-mail') }}
                                        </div>
                                        <div>
                                            Новое бронирование - #221
                                            <div class="board-info-date">2020-05-28 19:04:33</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="board-info-icon">
                                            {{ svg('icon-mail') }}
                                        </div>
                                        <div>
                                            Новое бронирование - #44
                                            <div class="board-info-date">2020-07-28 00:34:00</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="all-view">
                                <a href="#">Все брони</a>
                            </div>
                        </div>
                    </div>
                    <div class="search-box-icons-item">
                        <a href="#" class="h-icon">
                            {{ svg('icon-user') }}
                        </a>
                    </div>
                </div>
            </div>

            @yield('content')

        </div>
    </div>
</main>

<div class="modal modal-booking">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="modal-body">
                        <div class="modal-body-title">
                            № 13, 2 этаж, 2-спальная+2-спальный диван, с балконом
                        </div>
                        <div class="group group-two">
                            <div class="group">
                                <input type="text" placeholder="Введите имя">
                            </div>
                            <div class="group">
                                <input type="text" placeholder="Введите фамилию">
                            </div>
                        </div>
                        <div class="group group-two">
                            <div class="group">
                                <input type="text" placeholder="Телефон">
                            </div>
                            <div class="group">
                                <input type="text" placeholder="Email">
                            </div>
                        </div>
                        <div class="group-box">
                            <div class="row">
                                <div class="col-3">
                                    <div class="group">
                                        <label for="f-date-in">Дата заезда</label>
                                        <div class="with-addon">
                                            <span class="addon">
                                                <svg>
                                                    <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-calendar-date') }}"></use>
                                                </svg>
                                            </span>
                                            <input type="text" id="f-date-in" value="2020-04-03">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="group">
                                        <label for="f-time-in">Время заезда</label>
                                        <select name="time-in" id="f-time-in">
                                            <option value="14:00">14:00</option>
                                            <option value="02:00">02:00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="group">
                                        <label for="f-date-out">Дата выезда</label>
                                        <div class="with-addon">
                                            <span class="addon">
                                                <svg>
                                                    <use xlink:href="{{ asset('img/sprites/sprite.svg#icon-calendar-date') }}"></use>
                                                </svg>
                                            </span>
                                            <input type="text" id="f-date-out" value="2020-04-04">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="group">
                                        <label for="f-time-out">Время заезда</label>
                                        <select name="time-in" id="f-time-out">
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="group">
                                        <label for="f-count-adults">Взрослых в номере</label>
                                        <select name="count-adults" id="f-count-adults">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="group">
                                        <label for="f-count-child">Дети от 5 до 12 лет</label>
                                        <select name="time-in" id="f-count-child">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="group">
                                        <label for="f-count-child-small">Дети до 5 лет</label>
                                        <select name="time-in" id="f-count-child-small">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="group">
                                        <label for="f-count-sleeping-places">Спальных мест</label>
                                        <select name="count-sleeping-places" id="f-count-sleeping-places">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group group-two">
                            <div class="group">
                                <label for="f-tariff">Тариф</label>
                                <select name="tariff" id="f-tariff">
                                    <option value="Семейный">Семейный</option>
                                    <option value="Акция">Акция</option>
                                </select>
                            </div>
                            <div class="group">
                                <label for="f-discount">Скидка</label>
                                <select name="time-in" id="f-discount">
                                    <option value="Семейный">Семейный</option>
                                    <option value="Акция">Акция</option>
                                </select>
                            </div>
                            <div class="group">
                                <label for="f-prepay">Предоплата</label>
                                <input type="text" id="f-prepay" value="2500">
                            </div>
                        </div>
                        <div class="group-comment">
                            <div class="row">
                                <div class="col-8">
                                    <div class="group">
                                        <label for="f-comment">Комментарий</label>
                                        <textarea name="comment" id="f-comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="group">
                                        <label for="f-source-of-sale">Источник продажи</label>
                                        <select name="source-of-sale" id="f-source-of-sale">
                                            <option value="Прямая продажа">Прямая продажа</option>
                                            <option value="booking.com" disabled>booking.com</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group-total">
                            <div class="label">Общая стоимость:</div>
                            <div class="total"><span>55 000</span> р.</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-5">
                                <div class="btn-box">
                                    <div class="btn btn-close">Закрыть</div>
                                </div>
                            </div>
                            <div class="col-7 text-right">
                                <div class="btn-box">
                                    <div class="btn btn-delete">Удалить</div>
                                </div>
                                <div class="btn-box">
                                    <div class="btn btn-checkin">Заселить</div>
                                </div>
                                <div class="btn-box">
                                    <div class="btn btn-save">Сохранить</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
