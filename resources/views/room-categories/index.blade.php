@extends('layouts.app', [
    'title' => 'Список номеров'
])

@section('content')
    <div class="breadcrumbs">
        <ul>
            <li><a href="{{ route('home') }}">Главная</a></li>
            <li>Настройка номеров</li>
        </ul>
    </div>

    <div class="list-box">
        <div class="btn-add-box">
            <a href="{{ route('room_categories.create') }}" class="btn btn-add">
                Добавить категорию
            </a>
        </div>
        <table>
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Название категории</th>
                <th class="text-right">Количество номеров</th>
                <th class="text-right">Позиция</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($roomCategories as $roomCategory)
                <tr>
                    <td class="text-center">{{ $loop->index + 1 }}</td>
                    <td>
                        <div class="category-name">
                            <div>{{ $roomCategory->name }}</div>
                            <a href="#" title="Добавить номер в категорию">
                            <span>
                                {{ svg('icon-add') }}
                            </span>
                            </a>
                        </div>
                    </td>
                    <td class="text-right"><div class="badge">10</div></td>
                    <td class="text-right"><div class="badge">1</div></td>
                    <td>
                        <div class="btn-actions">
                            <div class="btn-actions-item">
                                <a href="{{ route('room_categories.edit', $roomCategory) }}" title="Редактировать">
                                    {{ svg('icon-edit') }}
                                </a>
                            </div>
                            <div class="btn-actions-item">
                                <form method="post" action="{{ route('room_categories.destroy', $roomCategory) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Удалить">
                                        {{ svg('icon-trash') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @if($roomCategory->rooms)
                    @foreach($roomCategory->rooms as $room)
                        <tr class="child">
                            <td class="text-center">{{ $loop->parent->index + 1 }}.{{ $loop->index + 1 }}</td>
                            <td>
                                <div class="child-name">{{ $room->name }}</div>
                            </td>
                            <td class="text-right"><div class="badge">10</div></td>
                            <td class="text-right"><div class="badge">1</div></td>
                            <td>
                                <div class="btn-actions">
                                    <div class="btn-actions-item">
                                        <a href="#" title="Редактировать">
                                            {{ svg('icon-edit') }}
                                        </a>
                                    </div>
                                    <div class="btn-actions-item">
                                        <form method="POST" action="#">
                                            @csrf
                                            <button type="submit" title="Удалить">
                                                {{ svg('icon-trash') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
