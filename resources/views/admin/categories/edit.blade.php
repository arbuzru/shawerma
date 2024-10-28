

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Редактировать категорию</h1>
        <form action="{{ route('admin.categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}" required>
            </div>
            <button type="submit" class="btn btn-warning">Сохранить</button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection
