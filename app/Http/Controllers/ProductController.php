<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // index
    public function index(){
        $products = Product::all();
        return response()->json(compact('products'));
    }

    //store
    public function store(Request $request){
        $products = Product::create($request->all());
        return response()->json(compact('products'));
    }

    //show
    public function show(Product $product){
        return response()->json(compact('product'));
    }

    //update
    public function update(Product $product, Request $request){
        $product->update($request->all());
        return response()->json(compact('product'));
    }

    //destroy
    public function destroy(Product $product){
        $product->delete();
        return response()->json(compact('product'));
    }
    
    
    //estos son para mostra vistas para direccionar a una vista
    //edit
    //delete
}
