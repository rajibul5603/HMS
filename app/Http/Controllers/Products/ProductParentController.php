<?php

namespace App\Http\Controllers\Products;
use App\Http\Controllers\Controller;
use App\Models\Product\ProductParent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductParentController extends Controller
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
        if(Gate::allows('Product_Parent.create')){
            return view('dashboard.products.parent.form');
        }
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
        if(Gate::allows('product_parent.create')){
            ProductParent::create($request->all());

            if($request->_modalform == 1){
                $lastData = ProductParent::orderBy("id","DESC")->first();
                return json_encode($lastData);
            }
            else{
                return route('product_parent.index');
            }
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\ProductParent  $productParent
     * @return \Illuminate\Http\Response
     */
    public function show(ProductParent $productParent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\ProductParent  $productParent
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductParent $productParent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product\ProductParent  $productParent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductParent $productParent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\ProductParent  $productParent
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductParent $productParent)
    {
        //
    }
}
