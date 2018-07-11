<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductTypeRequest;
use Illuminate\Http\Request;
use App\ProductType;
class ProductTypeController extends Controller
{
    //
    public function store(ProductTypeRequest $request)
    {
        $validate = $request->validated();
        /*
        ProductType::create([
            'product_type_id' => $request->product_type_id,
            'description' => $request->description,
        ]);
        */
    }
}
