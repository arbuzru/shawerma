

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Категория: {{ $category->name }}</h1>
        <p>ID: {{ $category->id }}</p>
        <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning">Редактировать</a>
        <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Назад</a>
    </div>
@endsection
