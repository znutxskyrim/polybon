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
    //
    /**
     * @param CategoryRequest $request
     */
    public function store(CategoryRequest $request){
        $validate = $request->validated();
        /*
        Category::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);
        */
    }
}
