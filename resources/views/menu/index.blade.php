@extends('layouts.app') <!-- Подключи основной шаблон -->

@section('content')
    <div class="container">
        <h1>Our Menu</h1>
        <div class="row">
            @foreach($dishes as $dish)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $dish->image_url }}" class="card-img-top" alt="{{ $dish->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $dish->name }}</h5>
                            <p class="card-text">${{ $dish->price }}</p>
                            <a href="{{ route('dishes.show', $dish->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
