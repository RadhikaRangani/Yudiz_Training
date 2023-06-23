<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class Test2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index',['products'=>Product::get()]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                //validate data
                $request->validate([
                    'name' => 'required',
                    'description' => 'required',
                    'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
                ]);

                //upload image
                // dd($request->all());
                   $imageName = time(). '.'.$request->image->extension();
                   $request->image->move(\public_path('products'),$imageName);

                   $product = new Product;
                   $product->name = $request->name;
                   $product->description = $request->description;
                   $product->image = $imageName;

                   $product->save();
                   return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // $product = Product::where('id',$id)->first();
        return view('products.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       //validate data
       $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000'
    ]);

    $product = Product::where('id',$id)->first();

    if(isset($request->image)){
        //upload image
           $imageName = time(). '.'.$request->image->extension();
           $request->image->move(public_path('products'),$imageName);
           $product->image = $imageName;
    }
       $product->name = $request->name;
       $product->description = $request->description;


       $product->save();
       return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($product);
        Product::destroy($id);
        return redirect(route('products.index'));

        // DB::delete('delete product where id = ?', ['$id']);
        // echo "Record deleted successfully!!";
        // echo '<a href = "/delete-records">Click Here</a> to go back.';
    }
}
