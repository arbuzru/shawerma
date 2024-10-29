@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Категории</h1>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-3">Добавить категорию</a>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
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
                            <a href="{{ route('admin.categories.show', $category) }}" class="btn btn-info">
                                <i class="fas fa-eye"></i> Просмотр
                            </a>
                            <a href="{{ route('admin.categories.create', $category) }}" class="btn btn-success">
                                <i class="fas fa-plus"></i> Добавить
                            </a>
                            <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i> Редактировать
                            </a>
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Вы уверены, что хотите удалить эту категорию?');">
                                    <i class="fas fa-trash-alt"></i> Удалить
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
