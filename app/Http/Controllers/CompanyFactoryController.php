<?php

namespace App\Http\Controllers;

use App\CompanyFactory;
use App\Http\Requests\CompanyFactoryRequest;
use Illuminate\Http\Request;

class CompanyFactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $CompanyFactories = CompanyFactory::all();
        return redirect()->route('companyfactory.index',['companyfactories' => $CompanyFactories]);
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
    public function store(CompanyFactoryRequest $request)
    {
        //
        CompanyFactory::create([
            'company_id' => $request->company_id,
            'factory_id' => $request->factory_id,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyFactory $companyFactory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyFactory $companyFactory)
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
    public function update(CompanyFactoryRequest $request, CompanyFactory $companyFactory)
    {
        //
        $companyFactory->update($request->all());
        return redirect()->route('companyfactories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyFactory $companyFactory)
    {
        //
        $companyFactory->delete();
        return redirect()->route('companyfactories.index');
    }
}
