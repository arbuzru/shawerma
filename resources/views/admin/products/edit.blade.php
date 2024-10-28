

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Редактировать продукт</h1>
        <form action="{{ route('admin.products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="number" step="0.01" name="price" class="form-control" id="price" value="{{ $product->price }}" required>
            </div>
            <div class="form-group">
                <label for="category_id">Категория</label>
                <select name="category_id" class="form-control" id="category_id" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Сохранить</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection
