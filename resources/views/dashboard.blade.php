@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Dashboard</h1>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <a href="#">
                            <img src="{{ $product['image'] }}" class="card-img-top product-image" alt="{{ $product['name'] }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text">${{ $product['price'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
