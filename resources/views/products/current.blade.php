@extends('layouts.master')

@section('content')
    <h1>All Products</h1>
    <hr>
    @foreach($products as $product)
        <div class="form-group">
            <b>ID: <label>{{ $product->id }}</label></b>
        </div>
        <div class="form-group">
            Name: <label>{{ $product->name }}</label>
        </div>
        <div class="form-group">
            Slug: <label>{{ $product->slug }}</label>
        </div>
        <div class="form-group">
            Image: <img src="/images/{{ $product->image }}" style="height: 150px" alt="">
        </div>
        <div class="form-group">
           Description: <label>{{ $product->description }}</label>
        </div>
        <div class="form-group">
            Price: <label>{{ $product->price }}</label>
        </div>
        <div class="form-group">
            Required number: <label>{{ $product->required_number }}</label>
        </div>
        <hr>
    @endforeach
@endsection


