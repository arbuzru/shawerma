

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Категории</h1>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Добавить категорию</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('admin.categories.show', $category) }}" class="btn btn-info">Просмотр</a>
                        <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning">Редактировать</a>
                        <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
