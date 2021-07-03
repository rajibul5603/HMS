<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product\ProductBrand;
use App\Models\Product\ProductCategory;
use App\Models\Product\ProductManufacturer;
use App\Models\Product\ProductParent;
use App\Models\Product\ProductSubCategory;
use App\Models\Product\ProductUnit;
use Illuminate\Http\Request;

class ProductApi extends Controller
{
    //
    public function products()
    {
        //
    }

    public function productDetails(Request $request)
    {
        //
    }

    public function parentList()
    {
        //
        $data = ProductParent::all();
        return json_encode($data);
    }

    public function lastParent()
    {
        //
        $data = ProductParent::orderBy("id","DESC")->first();
        return json_encode($data);
    }

    public function parentForm()
    {
        //
        return view('dashboard.products.modals.modalforms.productparent');
    }

    public function lastCategory()
    {
        //
        $data = ProductCategory::orderBy("id","DESC")->first();
        $data['lasturl'] = route('product.subcatapi',$data->id);
        return json_encode($data);
    }
    public function categoryForm()
    {
        //
        $data['parents'] = ProductParent::all();
        return view('dashboard.products.modals.modalforms.productcategory',$data);
    }

    public function categoryList(Request $request)
    {
        //
    }

    public function lastSubCategory()
    {
        //
        $data = ProductSubCategory::orderBy("id","DESC")->first();
        return json_encode($data);
    }
    public function subCategoryForm()
    {
        //
        $data['categories'] = ProductCategory::all();
        return view('dashboard.products.modals.modalforms.productsubcategory',$data);
    }

    public function subCategoryList(Request $request)
    {
        //
        $subcategories = ProductSubCategory::where('product_category_id',$request->id)->get();

        return json_encode($subcategories);

    }


    public function lastBrand()
    {
        //
        $data = ProductSubCategory::orderBy("id","DESC")->first();
        return json_encode($data);
    }
    public function brandForm()
    {
        //
        return view('dashboard.products.modals.modalforms.productbrand');
    }

    public function brandList(Request $request)
    {
        //
        $brands = ProductBrand::where('product_brand_id',$request->id)->get();

        return json_encode($brands);

    }

    public function lastManufacturer()
    {
        //
        $data = ProductManufacturer::orderBy("id","DESC")->first();
        return json_encode($data);
    }
    public function manufacturerForm()
    {
        //
        return view('dashboard.products.modals.modalforms.productmanufacturer');
    }

    public function manufacturerList(Request $request)
    {
        //
        $manufacturers = ProductManufacturer::where('product_manufacturer_id',$request->id)->get();
        return json_encode($manufacturers);

    }


    public function lastUnit()
    {
        //
        $data = ProductUnit::orderBy("id","DESC")->first();
        return json_encode($data);
    }
    public function unitForm()
    {
        //
        return view('dashboard.products.modals.modalforms.productunit');
    }

    public function unitList(Request $request)
    {
        //
        $units = ProductUnit::where('product_manufacturer_id',$request->id)->get();
        return json_encode($units);

    }


}
