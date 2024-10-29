@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Добавить продукт</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.store') }}" method="POST">
            @csrf
            <div class="card p-4 shadow">
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="price">Цена</label>
                    <input type="number" step="0.01" name="price" class="form-control" id="price" required>
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea name="description" class="form-control" id="description" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">Категория</label>
                    <select name="category_id" class="form-control" id="category_id" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-plus"></i> Создать
                    </button>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Назад
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection
