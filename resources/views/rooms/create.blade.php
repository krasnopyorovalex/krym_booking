@extends('layouts.app', [
    'title' => "Добавление номера в категорию {$roomCategory->name}"
])

@section('content')
    <div class="breadcrumbs">
        <ul>
            <li><a href="{{ route('home') }}">Главная</a></li>
            <li><a href="{{ route('room_categories.index') }}">Настройка номеров</a></li>
            <li>Добавление номера в категорию "{{ $roomCategory->name }}"</li>
        </ul>
    </div>

    <div class="box box-with-tabs">
        <form action="{{ route('rooms.store', $roomCategory) }}" method="post">
            <div id="tabs" class="tab-contents">
                <div class="tab-nav">
                    <div class="tab-link is_active">Основное</div><div class="tab-link">Услуги</div>
                </div>
                <div class="tab-content is_active">
                    <div class="row">
                        <div class="col-2">
                            <div class="group">
                                <label for="f-max-count">Max кол-во человек в номере</label>
                                <input type="text" id="f-max-count" name="max-count" value="{{ old('max-count') }}">
                            </div>
                            <div class="group">
                                <label for="f-main-places">Основных мест в номере</label>
                                <input type="text" id="f-main-places" name="main-places" value="{{ old('main-places') }}">
                            </div>
                            <div class="group">
                                <label for="f-adults">Взрослых в номере</label>
                                <input type="text" id="f-adults" name="adults" value="{{ old('adults') }}">
                            </div>
                            <div class="group">
                                <label for="f-extra-places">Дополнительных мест</label>
                                <input type="text" id="f-extra-places" name="extra-places">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="group">
                                <label for="f-children_to_2_yo">Ребёнок до 2 лет</label>
                                <input type="text" id="f-children_to_2_yo" name="children_to_2_yo" value="{{ old('children_to_2_yo') }}">
                            </div>
                            <div class="group">
                                <label for="f-children_from_3_to_5_yo">Ребёнок от 3 до 5 лет</label>
                                <input type="text" id="f-child2">
                            </div>
                            <div class="group">
                                <label for="f-child3">Ребёнок от 5 до 12 лет</label>
                                <input type="text" id="f-child3">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="group">
                                <label for="f-name">Название номера</label>
                                <input type="text" id="f-name" name="name" value="{{ old('name') }}" required autocomplete="off">
                            </div>
                            <div class="group">
                                <label for="f-text">Описание номера</label>
                                <textarea name="text" class="simple-editor" id="f-text"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="row">
                        <div class="col-3">
                            <div class="category-services">
                                <div class="category-services-item">
                                    <div class="category-services-item-name">
                                        Видео/аудио
                                    </div>
                                    <div class="category-services-item-list">
                                        <ul>
                                            <li>
                                                <input type="checkbox" id="f-service-01">
                                                <label for="f-service-01">
                                                    Телевизор с плоским экраном
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="f-service-02">
                                                <label for="f-service-02">
                                                    Кабельное телефидение
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="f-service-03">
                                                <label for="f-service-03">
                                                    Цифровое ТВ
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="f-service-04">
                                                <label for="f-service-04">
                                                    Подборка видео/аудио
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="category-services">
                                <div class="category-services-item">
                                    <div class="category-services-item-name">
                                        Ванная комната
                                    </div>
                                    <div class="category-services-item-list">
                                        <ul>
                                            <li>
                                                <input type="checkbox" id="f-service-11">
                                                <label for="f-service-11">
                                                    Ванная комната
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="f-service-22">
                                                <label for="f-service-22">
                                                    Пляжные полотенца
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="f-service-33">
                                                <label for="f-service-33">
                                                    Туалетные средства
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="f-service-44">
                                                <label for="f-service-44">
                                                    Раздельный санузел
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="f-service-45">
                                                <label for="f-service-45">
                                                    Банные полотенца
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="f-service-46">
                                                <label for="f-service-46">
                                                    Ванная
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="f-service-47">
                                                <label for="f-service-47">
                                                    Косметические средства
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="f-service-48">
                                                <label for="f-service-48">
                                                    Раковина
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="category-services">
                                <div class="category-services-item">
                                    <div class="category-services-item-name">
                                        Мебель
                                    </div>
                                    <div class="category-services-item-list">
                                        <ul>
                                            <li>
                                                <input type="checkbox" id="f-service-31">
                                                <label for="f-service-31">
                                                    Багажная тумба
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="f-service-32">
                                                <label for="f-service-32">
                                                    Зеркало
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="f-kreslo">
                                                <label for="f-kreslo">
                                                    Кресло
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="f-service-34">
                                                <label for="f-service-34">
                                                    Обеденный стол
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
            </div>
            <div class="group with-btn">
                <button type="submit" class="btn btn-save">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
