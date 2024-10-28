@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Продукты</h1>
{{--        <a href="{{ route('products.create') }}" class="btn btn-primary">Добавить продукт</a>--}}
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Категория</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                        <a href="{{ route('admin.products.show', $product) }}" class="btn btn-info">Просмотр</a>
                        <a href="{{ route('admin.products.create', $product) }}" class="btn btn-info">Добавить</a>
                        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning">Редактировать</a>
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST" style="display:inline;">
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
