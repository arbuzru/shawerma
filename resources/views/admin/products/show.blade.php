@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <p>Цена: {{ $product->price }} руб.</p>
        <p>{{ $product->description }}</p>

        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning">Редактировать</a>
        <form action="{{ route('admin.products.destroy', $product) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Вы уверены?');">Удалить</button>
        </form>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Назад</a>
    </div>
@endsection
