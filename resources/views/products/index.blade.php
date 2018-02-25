@extends('layouts.master')

@section('content')
    <h1>Promotion</h1>
    <hr>
    <div class="form-group">
        <b>Name:</b> <label>{{ $product->name }}</label>
    </div>
    <div class="form-group">
        <b>Slug:</b> <label>{{ $product->slug }}</label>
    </div>
    <div class="form-group">
       <b>Image:</b> <img src="/images/{{ $product->image }}" style="height: 150px" alt="">
    </div>
    <div class="form-group">
        <b>Description:</b> <label>{{ $product->description }}</label>
    </div>
    <div class="form-group">
        <b>Price:</b> <label>{{ $product->price }}</label>
    </div>
    <div class="form-group">
        <b>Required number:</b> <label>{{ $product->required_number }}</label>
    </div>
    <div class="form-group">
        <a href="/products/current"> View all products </a>
    </div>
@endsection


