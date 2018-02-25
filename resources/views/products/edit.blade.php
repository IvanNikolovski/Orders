@extends('layouts.master')

@section('content')
    <h1>Add product</h1>
    <hr>
    <form action="/edit/{{$product->slug}}" method="post" enctype="multipart/form-data" class="form-group">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Name: </label>
            <input type="text" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label>Slug: </label>
            <input type="text" name="slug" value="{{ $product->slug }}" required>
        </div>
        <div class="form-group">
            <label>Image: </label>
            <input type="file" name="image" value="{{ $product->image }}" required>
        </div>
        <div class="form-group">
            <label>Description: </label>
            <input type="text" name="description" value="{{ $product->description }}" required>
        </div>
        <div class="form-group">
            <label>Price: </label>
            Price: <input type="number" name="price" required min="0" value="{{ $product->price }}">
        </div>
        <div class="form-group">
            <label>Required number: </label>
            Required number: <input type="number" name="required_number" required min="0" value="{{ $product->required_number }}"><br><br>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success"> Update Product </button>
        </div>
    </form>
    <form action="/remove/{{ $product->slug }}" method="post">
        {{ csrf_field() }}
        <div class="form-inline">
            <button type="submit" class="btn btn-danger"> Delete Product </button>
        </div>
    </form>
@endsection
