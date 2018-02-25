@extends('layouts.master')

@section('content')
    <h1>View Product</h1>
    <hr>

    <div class="form-group">
        <b>Name: </b><label>{{ $product->name }}</label>
    </div>
    <div class="form-group">
        <b>Slug: </b><label>{{ $product->slug }}</label>
    </div>
    <div class="form-group">
        <b>Image: </b><img src="/images/{{ $product->image }}" style="height: 150px" alt="">
    </div>
    <div class="form-group">
        <b>Description: </b><label>{{ $product->description }}</label>
    </div>
    <div class="form-group">
        <b>Price: </b><label>${{ $product->price }}</label>
    </div>
    <div class="form-group">
        <b>Required number: </b> <label>{{ $product->required_number }}</label>
    </div>
    <hr>
    <h3>Preorders for {{$product->name}}</h3>
    @foreach($preorders as $preorder )
        <div class="form-group">
            <label>{{ $preorder->info }}</label>
        </div>
    @endforeach

    <form action="/remove/{{ $product->slug }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <button type="submit" class="btn btn-danger"> Delete </button>
        </div>
    </form>

    <hr>

    @if(count($preorders) < $product->required_number)
        <h1>Add Pre-Order</h1>
        <hr>
        <form action="/createOrder" method="post" class="form-group">
            {{ csrf_field() }}
            <div class="form-group">
                <label>User:</label>
                <input type="text" name="preorder_user" placeholder="User" required>
            </div>
            <div class="form-group">
                <label>Quantity:</label>
                <input type="number" name="quantity" required min="0">
            </div>
            <div class="form-group">
                <label>Info:</label>
                <input type="text" name="info" placeholder="Info" required>
            </div>
            <div class="form-group">
                <label>Product:</label>
                <input type="text" name="product_id" value="{{ $product->id }}" disabled>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success"> Add Pre-Order</button>
            </div>
        </form>
        @endif
@endsection

