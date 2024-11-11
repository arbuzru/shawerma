@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4">Ваша корзина</h1>

        @if(count($cart) > 0)
            <div class="cart-table">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Продукт</th>
                        <th>Цена</th>
                        <th>Количество</th>
                        <th>Итого</th>
                        <th>Действия</th> <!-- Добавляем колонку для кнопки удаления -->
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $productId => $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>${{ number_format($item['price'], 2) }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                            <td>
                                <!-- Форма для удаления товара из корзины -->
                                <form action="{{ route('cart.remove', $productId) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="total-price mt-4">
                <h3>Общая сумма: ${{ number_format($total, 2) }}</h3>
            </div>

            <div class="checkout-button mt-4">
                <a href="{{ route('checkout') }}" class="btn btn-success">Перейти к оформлению</a>
            </div>
        @else
            <p>Ваша корзина пуста.</p>
        @endif
    </div>
@endsection
