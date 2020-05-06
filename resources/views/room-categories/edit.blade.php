@extends('layouts.app', [
    'title' => 'Обновление категории'
])

@section('content')
    <div class="breadcrumbs">
        <ul>
            <li><a href="{{ route('home') }}">Главная</a></li>
            <li><a href="{{ route('room_categories.index') }}">Настройка номеров</a></li>
            <li>Обновление категории</li>
        </ul>
    </div>

    <div class="box box-with-tabs">
        <form action="{{ route('room_categories.update', $roomCategory) }}" method="post">
            @csrf
            @method('put')
            <div id="tabs" class="tab-contents">
                <div class="tab-nav">
                    <div class="tab-link is_active">Основное</div>
                </div>
                <div class="tab-content is_active">
                    <div class="row">
                        <div class="col-12">
                            <div class="group">
                                <label for="f-name">Название категории</label>
                                <input type="text" id="f-name" name="name" value="{{ old('name', $roomCategory->name) }}" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group with-btn">
                <button type="submit" class="btn btn-save">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
