@extends('layouts.master')

@section('content')
    <h1 class="text-center">Add Pre-Order</h1>
    <hr>
    <form action="/createOrder" method="post" class="form-group text-center">
        {{ csrf_field() }}
        <div class="form-group">
            <label>User: </label>
            <input type="text" name="preorder_user" placeholder="User" required>
        </div>
        <div class="form-group">
            <label>Quantity: </label>
            <input type="number" name="quantity" required min="0">
        </div>
        <div class="form-group">
            <label>Info: </label>
            <input type="text" name="info" placeholder="Info" required>
        </div>
        <div class="form-group">
            <label>Product: </label>
            <select name="product_id" >
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success"> Add Pre-Order </button>
        </div>
    </form>
@endsection
