

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добавить категорию</h1>
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <button type="submit" class="btn btn-success">Создать</button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection
