<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * ProductController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    /**
     * @param Request $request
     */
    public function store(ProductRequest $request){
        $validate = $request->validated();
        dd($request->description);
        Product::create([
            'product_id' => $request->product_id,
            'product_name' => $request->product_name,
            'description' => $request->description,
            'product_type_id' => $request->product_type_id
        ]);
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('test');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $product = Product::all();
        return view('product',['products' => $product]);
    }
}
