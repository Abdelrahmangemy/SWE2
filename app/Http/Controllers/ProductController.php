<?php

namespace App\Http\Controllers;

use App\Products_model;
use App\Category_model;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products_model::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category_model::pluck('name' , 'id');
        return view('admin.product.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $forminput = $request->except('image');

        $this->validate($request,[
            'pro_name' => 'required',
            'pro_code' => 'required',
            'pro_price' => 'required',
            'pro_info' => 'required',
            'spl_price' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
        ]); 
        $image = $request->image ;
        if ($image) {

            $imageName = $image->getClientOriginalName();

            $image->move('images' , $imageName) ;

            $forminput['image'] = $imageName;

        }

        Products_model::create($forminput);

        return redirect()->route('product.index')
                        ->with('success','Product created  successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Products_model $product)
    {
        return view('admin.product.show',compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products_model::find($id);
        $categories = Category_model::pluck('name' , 'id');
        return view('admin.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products_model $product)
    {
        $this->validate($request,[
            'pro_name' => 'required',
            'pro_code' => 'required',
            'pro_price' => 'required',
            'pro_info' => 'required',
            'spl_price' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
        ]); 

        $product->update($request->all());

        return redirect()->route('product.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products_model $product)
    {
        $product->delete();


        return redirect()->route('product.index')
                        ->with('success','Product deleted successfully');
    }
}
