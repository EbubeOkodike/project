<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Validation\ValidationExcept;

class productController extends Controller
{
    public function index()
    {
        $rice = product::all();
        return view('product.home', compact('rice'));
    }
    //

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $product = new product;
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();
        return to_route('home');
    }

    public function edit($id)
    {
        $product = product::find($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = product::find($id);
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->update();
        return to_route('home');
    }

    public function delete($id)
    {
        $product = product::find($id);
        $product->delete();
        return to_route('home');
    }
}