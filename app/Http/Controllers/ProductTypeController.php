<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductTypeRequest;
use Illuminate\Http\Request;
use App\ProductType;

/**
 * Class ProductTypeController
 * @package App\Http\Controllers
 */
class ProductTypeController extends Controller
{

    /**
     * ProductTypeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param ProductTypeRequest $request
     */
    public function store(ProductTypeRequest $request)
    {
        $validate = $request->validated();
        ProductType::create([
            'product_type_id' => $request->product_type_id,
            'description' => $request->description,
        ]);

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $type = ProductType::all();
        return view('ProductType',['types' => $type]);
    }
}
