@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Продукт: {{ $product->name }}</h1>
        <p>ID: {{ $product->id }}</p>
        <p>Цена: {{ $product->price }}</p>
        <p>Категория: {{ optional($product->category)->name ?? 'Не указана' }}</p>
        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning">Редактировать</a>
        <form action="{{ route('admin.products.destroy', $product) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Назад</a>
    </div>
@endsection
