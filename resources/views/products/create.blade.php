@extends('layouts.master')

@section('content')
    <h1>Add product</h1>
    <hr>
    <form action="/create" method="post" enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div class="form-group">
            <label>Name: </label>
            <input type="text" name="name" placeholder="name" required>
        </div>
        <div class="form-group">
            <label>Slug: </label>
            <input type="text" name="slug" placeholder="slug" required>
        </div>
        <div class="form-group">
            <label>Image: </label>
            <input type="file" name="image" placeholder="image" required>
        </div>
        <div class="form-group">
            <label>Description: </label>
            <input type="text" name="description" placeholder="description" required>
        </div>
        <div class="form-group">
            <label>Price: </label>
            <input type="number" name="price" required min="0">
        </div>
        <div class="form-group">
            <label>Required number: </label>
            <input type="number" name="required_number" required min="0">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success"> Add Product </button>
        </div>
    </form>
@endsection
