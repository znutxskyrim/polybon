<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Category;
/**
 * Class CategoryController
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{
    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param CategoryRequest $request
     */
    public function store(CategoryRequest $request){
        $validate = $request->validated();
        Category::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $category = Category::all();
        return view('category',['categories' => $category]);
    }
}
