<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;
/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $product = Product::all();
        return view('productDestroy',['products' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * @param ProductRequest $request
     */
    public function store(ProductRequest $request){
        $validate = $request->validated();
        Product::create([
            'product_id' => $request->product_id,
            'product_name' => $request->product_name,
            'description' => $request->description,
            'product_type_id' => $request->product_type_id
        ]);
        return redirect()->route('product.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $_product = Product::where('product_id','=',$id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        //
        $_product = Product::where('product_id','=',$id)->first();
        $_product->product_id = $request->product_id;
        $_product->product_name = $request->product_name;
        $_product->description = $request->description;
        $_product->product_type_id = $request->product_type_id;
        $_product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $_product = Product::where('product_id','=',$id)->first();
        $_product->delete();
        return redirect()->route('product.index');
    }

}
