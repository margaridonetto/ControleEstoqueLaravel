<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;

class EstoqController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	return view('products.index', compact('products'));
    }

    public function show($id)
    {
    	$product = Product::find($id);
    	return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return redirect('products');
    }

    public function edit($id)
    {
       $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        Product::find($id)->update($request->all());
         return redirect('products');
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
         return redirect('products');
    }
}
