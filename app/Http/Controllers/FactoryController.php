<?php

namespace App\Http\Controllers;

use App\Factory;
use App\Http\Requests\FactoryRequest;
use Illuminate\Http\Request;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $factories = Factory::all();
        return view('factory',['factories' => $factories]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FactoryRequest $request)
    {
        //
        Factory::create([
            'name' => $request->name,
            'address' => $request->address,
            'villagenumber' => $request->villagenumber,
            'alley' => $request->alley,
            'road' => $request->road,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'postcode' => $request->postcode,
            'phonenumber' => $request->phonenumber,
            'phonenumber_con' => $request->phonenumber_con,
            'fax' => $request->fax,
            'email' => $request->email,
        ]);
        return redirect()->route('factory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Factory $factory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Factory $factory)
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
    public function update(FactoryRequest $request, Factory $factory)
    {
        //
        $factory->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factory $factory)
    {
        //
        $factory->delete();
    }
}
