<?php

namespace App\Http\Controllers;

use App\Preorder;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class ProductController extends Controller
{
    public function index() {
        $product = Product::orderBy('required_number', 'ASC')->first();

        return view('products.index', compact('product'));
    }
    public function current() {
        $products = Product::all();
        return view('products.current', compact('products'));
    }
    public function create() {
        return view('products.create');
    }
    public function store() {
        $imageName = '';
        \request()->validate([
           'name' => 'required|min:4',
           'slug' => 'required|min:4',
           'image' => 'required | mimes:jpeg,jpg,png',
           'description' => 'required|min:4',
           'price' => 'required|min:0',
           'required_number' => 'required|min:0'

        ]);
        if (Input::hasFile('image'))
        {
            $imageName = time(). request()->image->getClientOriginalName();

            request()->image->move(public_path('images'), $imageName);


        }
        Product::create([
            'name' => \request('name'),
            'slug' => \request('slug'),
            'image' => $imageName,
            'description' => \request('description'),
            'price' => \request('price'),
            'required_number' => \request('required_number')

        ]);
        return redirect('/');

    }
    public function edit($slug){
        $product = Product::where('slug', '=', $slug)->first();

        return view('products.edit', compact('product'));

    }
    public function update ($slug) {
        $imageName = '';
        $product = Product::where('slug', '=', $slug)->first();
        if (Input::hasFile('image'))
        {
            $imageName = time(). request()->image->getClientOriginalName();

            request()->image->move(public_path('images'), $imageName);


        }

        $product->name = \request('name');
        $product->slug = \request('slug');
        $product->image = $imageName;
        $product->description = \request('description');
        $product->price = \request('price');
        $product->required_number = \request('required_number');

        $product->save();

        return redirect ('/');

    }
    public function remove($slug) {
        $product = Product::where('slug', '=', $slug)->delete();

        return redirect ('/');
    }
    public function view($slug) {
        $product = Product::where('slug', '=', $slug)->first();

        $preorders = Preorder::where('product_id', '=', $product->id)->get();
        //dd($preorders);
        return view('products.view', compact('product', 'preorders'));
    }
}
