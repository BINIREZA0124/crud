<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
$product = Product::all();
return view('products.products',compact('products'));
    }

    public function create()
    {

return view ('products,create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);
        Product::create($request->all());

        return redirect()->route('products.index')->with('success','Product created successfully.');
    }

}

