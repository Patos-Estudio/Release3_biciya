<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return $products;
    }

    public function store(Request $request)
    {
        $product = new Product();
        $products->description = $request->description;
        $products->price = $request->price;
        $products->stock = $request->stock;

        $products->save();
    }

    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($request->id);
        $products->description = $request->description;
        $products->price = $request->price;
        $products->stock = $request->stock;

        $product->save();
        return $product;
    }

    public function destroy($id)
    {
        $product = Product::destroy($id);
        return $product;
    }
}
