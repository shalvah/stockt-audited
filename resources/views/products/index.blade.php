@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Products</h2>
        @include('flash::message')
        <div class="list-group">
            @foreach($products as $product)
                <a href="/products/{{ $product->id }}" class="list-group-item">
                    {{ $product->name }}
                </a>
            @endforeach
        </div>
    </div>
@endsection
