<?php

namespace App\Http\Controllers\Products;
use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

use App\Models\Product\Product;
use App\Models\Product\ProductBrand;
use App\Models\Product\ProductCategory;
use App\Models\Product\ProductManufacturer;
use App\Models\Product\ProductSubCategory;
use App\Models\Product\ProductParent;
use App\Models\Product\ProductScan;
use App\Models\Product\ProductUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Gate::allows('product.index')){
            $data['products'] = Product::all();
            return view('dashboard.products.index',$data);
        }
        else{
            if(Auth::check()){
                abort(403);
            }
            else{
                return redirect('login');
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        if(Gate::allows('product.create')){
            $last_product = Product::where('user_id', Auth::id())->orderBy('id','desc')->first();
            if($last_product !=''){
                $last_code=$last_product->code;
                $digits = substr($last_code,3);
                $digits = substr($digits,0,strlen($digits)-1);
                $new_code = strtoupper(User::find(Auth::id())->code_name).str_pad($digits+1,4,'0',STR_PAD_LEFT) .'P';
            }
            else{
                $new_code = strtoupper(substr(Auth::user()->name,0,3)).str_pad('1',4,'0',STR_PAD_LEFT) .'P';
            }
            $data['code'] = $new_code;
            $data['parents'] = ProductParent::all();
            $data['categories'] = ProductCategory::all();
            $data['sub_categories'] = ProductSubCategory::all();
            $data['brands'] = ProductBrand::all();
            $data['manufacturers'] = ProductManufacturer::all();
            $data['units'] = ProductUnit::all();
            $data['scans'] = ProductScan::all();
            $data['countries'] = Country::all();
            return view('dashboard.products.form',$data);
        }
        else{
            if(Auth::check()){
                abort(403);
            }
            else{
                return redirect('login');
            }
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

        // if ($file = $request->file('image')) {
        //     // $file->store('products_img');
        //     $path = $file->storeAs(
        //         'products_img', $request->code
        //     );
        // }
        //

        if(Gate::allows('product.create')){
            if($file = $request->file('_productimage')) {
                $filename =  $request->code. '.' . $file->getClientOriginalExtension();
                $directory = (Storage::path("products/images"));
                $location = (Storage::path("products/images/"));
                $link = $filename;
                if(!File::exists($directory)){
                    File::makeDirectory($directory, 0755, true, true);
                }
                // $file->move($directory,$filename);
                // Image::make($file)->save($location);
                /* Resize and save image */
                // Image::make($file)->resize(800, 800, function ($constraint) {
                //     $constraint->aspectRatio();
                //     $constraint->upsize();
                // })->save($location.'/'.$filename);
                // $file->move($directory,$filename);
                $link=$file->store('products/images');
                $link = basename($link);
                $request->merge([
                    'image' => $link,
                ]);
            }
         Product::create($request->all());
         return redirect(route('product.index'));
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        if(Gate::allows('product.edit')){
            $data['product'] = $product;
            $data['code'] = $product->code;
            $data['parents'] = ProductParent::all();
            $data['categories'] = ProductCategory::all();
            $data['sub_categories'] = ProductSubCategory::where('product_category_id', $product->product_category_id)->get();
            $data['brands'] = ProductBrand::all();
            $data['manufacturers'] = ProductManufacturer::all();
            $data['units'] = ProductUnit::all();
            $data['scans'] = ProductScan::all();
            $data['countries'] = Country::all();
            return view('dashboard.products.form',$data);
        }
        else{
            if(Auth::check()){
                abort(403);
            }
            else{
                return redirect('login');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, $id=null)
    {
        //
        if(Gate::allows('product.edit')){
            if($file = $request->file('_productimage')) {
                $filename =  $request->code. '.' . $file->getClientOriginalExtension();
                $directory = (Storage::path("products/images"));
                $location = (Storage::path("products/images/"));
                $link = $filename;
                if(!File::exists($directory)){
                    File::makeDirectory($directory, 0755, true, true);
                }
                // $file->move($directory,$filename);
                // Image::make($file)->save($location);
                /* Resize and save image */
                // Image::make($file)->resize(800, 800, function ($constraint) {
                //     $constraint->aspectRatio();
                //     $constraint->upsize();
                // })->save($location.'/'.$filename);
                // $file->move($directory,$filename);
                $old_image = $product->find($id)->image;
                Storage::delete('products/images/'.$old_image);
                $link=$file->store('products/images');
                $link = basename($link);
                $request->merge([
                    'image' => $link,
                ]);
            }
            $product->find($id)->update($request->all());

         return redirect(route('product.index'));
        }




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
