@extends('layouts.app', [
    'title' => 'Шахматка бронирования'
])

@section('content')
    <div class="breadcrumbs">
        <ul>
            <li><a href="{{ route('home') }}">Главная</a></li>
            <li>Шахматка</li>
        </ul>
    </div>

    <div class="booking">
        <div class="booking-header">
            <div class="bh-cd-box">
                <div class="bh-current-date">
                    <form action="" method="get">
                        @csrf
                        <div class="group with-addon">
                            <div class="with-addon">
                            <span class="addon">
                                {{ svg('icon-calendar-date') }}
                            </span>
                                <input type="text" id="f-from-date" value="{{ now()->format('Y-m-d') }}" name="from-date">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bh-md-box">
                <div class="bh-month">
                    <div class="bh-month-current">
                    <span>
                        <svg>
                            <use xlink:href="../img/sprites/sprite.svg#icon-cheveron-down"></use>
                        </svg>
                    </span>
                    </div>
                    <div class="bh-month-next">
                    <span>
                        <svg>
                            <use xlink:href="../img/sprites/sprite.svg#icon-cheveron-down"></use>
                        </svg>
                    </span>
                    </div>
                </div>
                <div class="bh-dates">
                    <div class="cell">
                        <div class="month-day">27</div>
                        <div class="week-day">Пт</div>
                    </div>
                    <div class="cell holiday">
                        <div class="month-day">28</div>
                        <div class="week-day">Сб</div>
                    </div>
                    <div class="cell holiday">
                        <div class="month-day">29</div>
                        <div class="week-day">Вс</div>
                    </div>
                    <div class="cell last-day" data-month="Март">
                        <div class="month-day">30</div>
                        <div class="week-day">Пн</div>
                    </div>
                    <div class="cell first-day" data-month="Апрель">
                        <div class="month-day">01</div>
                        <div class="week-day">Вт</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">02</div>
                        <div class="week-day">Ср</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">03</div>
                        <div class="week-day">Чт</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">04</div>
                        <div class="week-day">Пт</div>
                    </div>
                    <div class="cell holiday">
                        <div class="month-day">05</div>
                        <div class="week-day">Сб</div>
                    </div>
                    <div class="cell holiday">
                        <div class="month-day">06</div>
                        <div class="week-day">Вс</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">07</div>
                        <div class="week-day">Пн</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">08</div>
                        <div class="week-day">Вт</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">09</div>
                        <div class="week-day">Ср</div>
                    </div>
                    <div class="cell current" style="--data-hour: 18">
                        <div class="month-day">10</div>
                        <div class="week-day">Чт</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">11</div>
                        <div class="week-day">Пт</div>
                    </div>
                    <div class="cell holiday">
                        <div class="month-day">12</div>
                        <div class="week-day">Сб</div>
                    </div>
                    <div class="cell holiday">
                        <div class="month-day">13</div>
                        <div class="week-day">Вс</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">14</div>
                        <div class="week-day">Пн</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">15</div>
                        <div class="week-day">Вт</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">16</div>
                        <div class="week-day">Ср</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">17</div>
                        <div class="week-day">Чт</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">18</div>
                        <div class="week-day">Пт</div>
                    </div>
                    <div class="cell holiday">
                        <div class="month-day">19</div>
                        <div class="week-day">Сб</div>
                    </div>
                    <div class="cell holiday">
                        <div class="month-day">20</div>
                        <div class="week-day">Вс</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">21</div>
                        <div class="week-day">Пн</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">22</div>
                        <div class="week-day">Вт</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">23</div>
                        <div class="week-day">Ср</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">24</div>
                        <div class="week-day">Чт</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">25</div>
                        <div class="week-day">Пт</div>
                    </div>
                    <div class="cell holiday">
                        <div class="month-day">26</div>
                        <div class="week-day">Сб</div>
                    </div>
                    <div class="cell holiday">
                        <div class="month-day">27</div>
                        <div class="week-day">Вс</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">28</div>
                        <div class="week-day">Пн</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">29</div>
                        <div class="week-day">Вт</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">30</div>
                        <div class="week-day">Ср</div>
                    </div>
                    <div class="cell first-day" data-month="Май">
                        <div class="month-day">01</div>
                        <div class="week-day">Чт</div>
                    </div>
                    <div class="cell">
                        <div class="month-day">02</div>
                        <div class="week-day">Пт</div>
                    </div>
                    <div class="cell holiday">
                        <div class="month-day">03</div>
                        <div class="week-day">Сб</div>
                    </div>
                    <div class="cell holiday">
                        <div class="month-day">04</div>
                        <div class="week-day">Вс</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="booking-body">
            <div class="booking-body-category">
                <div class="bb-name" title="2-местный номер люкс с кроватью и балконом">
                    <div>
                        2-местный номер люкс с кроватью и балконом
                    </div>
                    <div>
                        <svg>
                            <use xlink:href="../img/sprites/sprite.svg#icon-cheveron-down"></use>
                        </svg>
                    </div>
                </div>
                <div class="bb-free">
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">5</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">5</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">4</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">4</div>
                    </div>
                </div>
            </div>
            <div class="booking-body-category-rooms">
                <div class="booking-body-room">
                    <div class="bb-name">
                        № 13, 2 этаж, 2-спальная+2-спальный диван, с балконом
                    </div>
                    <div class="bb-free">
                        <div class="cell">
                            <div class="count">01</div>
                        </div>
                        <div class="cell holiday status-booked">
                            <div class="book-info" style="--data-width: 5">
                                <span>Краснопёрова Наталья</span>
                                <div class="book-info-payed">5 000</div>
                            </div>
                            <div class="count">03</div>
                        </div>
                        <div class="cell holiday status-booked">
                            <div class="count">02</div>
                        </div>
                        <div class="cell status-booked">
                            <div class="count">02</div>
                        </div>
                        <div class="cell status-booked">
                            <div class="count">01</div>
                        </div>
                        <div class="cell status-booked">
                            <div class="count">03</div>
                        </div>
                        <div class="cell status-booked">
                            <div class="book-info" style="--data-width: 3">
                                <span>Дональд Трамп</span>
                                <div class="book-info-payed">5 000</div>
                            </div>
                            <div class="count">02</div>
                        </div>
                        <div class="cell status-booked">
                            <div class="count">07</div>
                        </div>
                        <div class="cell holiday status-booked">
                            <div class="count">01</div>
                        </div>
                        <div class="cell holiday status-confirm">
                            <div class="book-info" style="--data-width: 3">
                                <span>Мачихина Нина</span>
                                <div class="book-info-payed">12 000</div>
                            </div>
                            <div class="count">02</div>
                        </div>
                        <div class="cell status-confirm">
                            <div class="count">03</div>
                        </div>
                        <div class="cell status-confirm">
                            <div class="count">01</div>
                        </div>
                        <div class="cell status-confirm">
                            <div class="count">01</div>
                        </div>
                        <div class="cell current">
                            <div class="count">10</div>
                        </div>
                        <div class="cell">
                            <div class="count">02</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">03</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">01</div>
                        </div>
                        <div class="cell">
                            <div class="count">02</div>
                        </div>
                        <div class="cell">
                            <div class="count">01</div>
                        </div>
                        <div class="cell status-checkin">
                            <div class="book-info" style="--data-width: 4">
                                <span>Галковский Дмитрий</span>
                                <div class="book-info-payed">2 000</div>
                            </div>
                            <div class="count">03</div>
                        </div>
                        <div class="cell status-checkin">
                            <div class="count">02</div>
                        </div>
                        <div class="cell status-checkin">
                            <div class="count">02</div>
                        </div>
                        <div class="cell holiday status-checkin">
                            <div class="count">01</div>
                        </div>
                        <div class="cell holiday status-checkin">
                            <div class="count">02</div>
                        </div>
                        <div class="cell">
                            <div class="count">03</div>
                        </div>
                        <div class="cell">
                            <div class="count">04</div>
                        </div>
                        <div class="cell">
                            <div class="count">05</div>
                        </div>
                        <div class="cell">
                            <div class="count">03</div>
                        </div>
                        <div class="cell">
                            <div class="count">07</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">01</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">04</div>
                        </div>
                        <div class="cell">
                            <div class="count">04</div>
                        </div>
                        <div class="cell">
                            <div class="count">04</div>
                        </div>
                        <div class="cell">
                            <div class="count">04</div>
                        </div>
                        <div class="cell">
                            <div class="count">04</div>
                        </div>
                        <div class="cell">
                            <div class="count">04</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">04</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">04</div>
                        </div>
                    </div>
                </div>
                <div class="booking-body-room">
                    <div class="bb-name">
                        № 14, 2 этаж, 2-спальная+2-спальный диван, с балконом
                    </div>
                    <div class="bb-free">
                        <div class="cell">
                            <div class="count">05</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">02</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">01</div>
                        </div>
                        <div class="cell">
                            <div class="count">04</div>
                        </div>
                        <div class="cell">
                            <div class="count">03</div>
                        </div>
                        <div class="cell">
                            <div class="count">01</div>
                        </div>
                        <div class="cell">
                            <div class="count">05</div>
                        </div>
                        <div class="cell">
                            <div class="count">01</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">02</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">03</div>
                        </div>
                        <div class="cell">
                            <div class="count">01</div>
                        </div>
                        <div class="cell">
                            <div class="count">02</div>
                        </div>
                        <div class="cell">
                            <div class="count">03</div>
                        </div>
                        <div class="cell current">
                            <div class="count">10</div>
                        </div>
                        <div class="cell">
                            <div class="count">01</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">03</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">01</div>
                        </div>
                        <div class="cell">
                            <div class="count">02</div>
                        </div>
                        <div class="cell">
                            <div class="count">01</div>
                        </div>
                        <div class="cell">
                            <div class="count">03</div>
                        </div>
                        <div class="cell">
                            <div class="count">02</div>
                        </div>
                        <div class="cell">
                            <div class="count">02</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">01</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">02</div>
                        </div>
                        <div class="cell">
                            <div class="count">03</div>
                        </div>
                        <div class="cell">
                            <div class="count">04</div>
                        </div>
                        <div class="cell">
                            <div class="count">05</div>
                        </div>
                        <div class="cell">
                            <div class="count">03</div>
                        </div>
                        <div class="cell">
                            <div class="count">07</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">01</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">04</div>
                        </div>
                        <div class="cell">
                            <div class="count">04</div>
                        </div>
                        <div class="cell">
                            <div class="count">04</div>
                        </div>
                        <div class="cell">
                            <div class="count">04</div>
                        </div>
                        <div class="cell">
                            <div class="count">04</div>
                        </div>
                        <div class="cell">
                            <div class="count">04</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">04</div>
                        </div>
                        <div class="cell holiday">
                            <div class="count">04</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking-body-category">
                <div class="bb-name" title="3-5-местный номер «полулюкс»">
                    <div>
                        3-5-местный номер «полулюкс»
                    </div>
                    <div>
                        <svg>
                            <use xlink:href="../img/sprites/sprite.svg#icon-cheveron-down"></use>
                        </svg>
                    </div>
                </div>
                <div class="bb-free">
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">5</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">5</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">1</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                </div>
            </div>
            <div class="booking-body-category">
                <div class="bb-name" title="1-комнатный люкс с балконом (до 4 чел.)">
                    <div>
                        1-комнатный "люкс" с балконом (до 4 чел.)
                    </div>
                    <div>
                        <svg>
                            <use xlink:href="../img/sprites/sprite.svg#icon-cheveron-down"></use>
                        </svg>
                    </div>
                </div>
                <div class="bb-free">
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">3</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">3</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">4</div>
                    </div>
                </div>
            </div>
            <div class="booking-body-category">
                <div class="bb-name" title="2-комнатный люкс с 2-мя балконами с видом на море">
                    <div>
                        2-комнатный "люкс" с 2-мя балконами с видом на море
                    </div>
                    <div>
                        <svg>
                            <use xlink:href="../img/sprites/sprite.svg#icon-cheveron-down"></use>
                        </svg>
                    </div>
                </div>
                <div class="bb-free">
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">3</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">10</div>
                    </div>
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">5</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">5</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">4</div>
                    </div>
                </div>
            </div>
            <div class="booking-body-category">
                <div class="bb-name" title="2-комнатный номер «семейный»">
                    <div>
                        2-комнатный номер «семейный»
                    </div>
                    <div>
                        <svg>
                            <use xlink:href="../img/sprites/sprite.svg#icon-cheveron-down"></use>
                        </svg>
                    </div>
                </div>
                <div class="bb-free">
                    <div class="cell">
                        <div class="count">1</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">4</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">7</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">0</div>
                    </div>
                    <div class="cell">
                        <div class="count">0</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">0</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">0</div>
                    </div>
                    <div class="cell">
                        <div class="count">0</div>
                    </div>
                    <div class="cell">
                        <div class="count">0</div>
                    </div>
                    <div class="cell">
                        <div class="count">0</div>
                    </div>
                    <div class="cell">
                        <div class="count">10</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">4</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">7</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">5</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                    <div class="cell">
                        <div class="count">2</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell">
                        <div class="count">4</div>
                    </div>
                    <div class="cell">
                        <div class="count">5</div>
                    </div>
                    <div class="cell">
                        <div class="count">3</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">7</div>
                    </div>
                    <div class="cell holiday">
                        <div class="count">1</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
