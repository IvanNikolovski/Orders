<?php

namespace App\Http\Controllers;

use App\Preorder;
use App\Product;
use Illuminate\Http\Request;

class PreorderController extends Controller
{
    public function create() {
        $products = Product::all();

        return view('preorders.create', compact('products'));
    }
    public function store() {

        Preorder::create([
            'preorder_user' => \request('preorder_user'),
            'quantity' => \request('quantity'),
            'info' => \request('info'),
            'product_id' => \request('product_id')

        ]);
        return redirect('/');
    }
}
