<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $products=Product::all();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories= Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $image =$request->file('image')->store('public/products');
         $product=Product::create([
            'name'=>$request->name,
              'price'=>$request->price,
                'capacity'=>$request->capacity,
                 'image'=>$image,
            'description'=>$request->description
           
        ]);
         if($request->has('products')){
            $product->products()->attach($request->products);

         }
        return to_route('admin.products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories= Category::all();
         return view('admin.products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'capacity'=>'required',
            'price'=>'required',
        ]);
        $image=$product->image;
        if($request->hasfile('image')){
            Storage::delete($product->image);
            $image = $request->file('image')->store('public/products');
        }
        $product->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'capacity'=>$request->capacity,
            'description'=>$request->description,
            'image'=>$image
        ]);
        return to_route('admin.products.index');
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        Storage::delete($product->image);
        $product->delete();
         return to_route('admin.products.index');
    }
}
