<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $data = compact('products');


        return view('products', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            'product_name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        
            ]
        );

        $product = new Product();
        $product->name = $request->product_name;
        $product->amount = $request->price;
        $product->description = $request->description;
        $product->save();

        echo $product->name. ' added successfully';


        // return redirect()->back();to previous page
        return redirect()->route('home');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "show specific product";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "update form for a product";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "product updated";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "delete product";
    }
}
