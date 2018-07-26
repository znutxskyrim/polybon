<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductTypeRequest;
use Illuminate\Http\Request;
use App\ProductType;

class ProductTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('role', ['only' => 'index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('role');
        $type = ProductType::all();
        return view('ProductType', ['types' => $type]);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductTypeRequest $request)
    {
        $validate = $request->validated();
        ProductType::create([
            'product_type_id' => $request->product_type_id,
            'description' => $request->description,
        ]);
        return redirect()->route('producttype.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(ProductType $productType)
    {
        //return view('ProductType', ['types' => $productType]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductTypeRequest $request, ProductType $productType)
    {

        $productType->update($request->all());
        return redirect()->route('producttype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductType $productType)
    {
        $productType->delete();
        return redirect()->route('producttype.index');
    }
}
