<?php

namespace App\Http\Controllers\Products;

use App\Models\Product\ProductManufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class ProductManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //

        if(Gate::allows('product_manufacturer.create')){
            ProductManufacturer::create($request->all());

            if($request->_modalform == 1){
                $lastData = ProductManufacturer::orderBy("id","DESC")->first();
                return json_encode($lastData);
            }
            else{
                return route('product_manufacturer.index');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\ProductManufacturer  $productManufacturer
     * @return \Illuminate\Http\Response
     */
    public function show(ProductManufacturer $productManufacturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\ProductManufacturer  $productManufacturer
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductManufacturer $productManufacturer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product\ProductManufacturer  $productManufacturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductManufacturer $productManufacturer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\ProductManufacturer  $productManufacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductManufacturer $productManufacturer)
    {
        //
    }
}
