<div class="container">
    <h3>Your Cart</h3>
    <table class="table">
        <thead>
        <tr>
            <th>Food</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
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
</div>
