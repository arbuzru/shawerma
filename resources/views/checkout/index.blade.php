@extends('layouts.app')

@section('content')
    <h1>Оформление заказа</h1>
    @if(count($cart) > 0)
        <table class="table">
            <thead>
            <tr>
                <th>Продукт</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Итого</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cart as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>${{ number_format($item['price'], 2) }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <p>Общая сумма: ${{ number_format($total, 2) }}</p>
        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <!-- Добавьте необходимые поля формы для оформления заказа -->
            <button type="submit" class="btn btn-primary">Подтвердить заказ</button>
        </form>
    @else
        <p>В вашей корзине нет товаров для оформления.</p>
    @endif
@endsection
