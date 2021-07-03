@extends('dashboard.layouts.app')
@section('main')

{{-- {{dd(Storage::url('products_img'))}} --}}
                    <div class="container-fluid">
                        <h1 class="mt-4">@if (Route::currentRouteName()=='product.edit')Edit @else Add @endif Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active">@if (Route::currentRouteName()=='product.edit')Edit @else Add @endif Product</li>

                        </ol>
                        <div class="card" style="max-width: 1000px; margin: auto; padding: 10px 20px;">
                            <form  enctype="multipart/form-data"
                            @if (Route::currentRouteName()=='product.edit') action="{{route('product.update',$product->id)}}"  method="post"
                            @else  action="{{route('product.store')}}" method="post"
                            @endif >
                                @csrf
                                <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
                        <div class="row">
                            <div class="col-md-8">
                                <x-form.input.text id="name" label="Name" otherattr="required" class="form-control" placeholder="Product Name" value="{{(isset($product->name)!='')?$product->name :''}}"/>
                            </div>
                            <div class="col-md-4">
                                <input type="hidden" name="code" id="code" value="{{(isset($product->code)!='')?$product->code : $code}}">
                                <x-form.input.text label="Code" class="form-control" otherattr="disabled" placeholder="Product Code" value="{{(isset($product->code)!='')?$product->code : $code}}"/>
                            </div>
                            <div class="col-md-4">
                                <x-form.input.select-combo label="Parent" class="select2_dd" id="product_parent_id" modaltitle="Add&nbsp;Parent" modalurl="{{route('product.parentform')}}" btnid="add_parent" btnclass="btn-success openModalForm" btnicon="fa fa-plus-circle">
                                    <option value="">Select</option>
                                    @foreach ($parents as $key=>$parent)
                                    <option value="{{$parent->id}}" {{(isset($product->product_parent_id) && $product->product_parent_id ==$parent->id)? 'selected' :''}}>{{$parent->name}}</option>
                                    @endforeach
                                </x-form.input.select-combo>
                            </div>

                            <div class="col-md-4">
                                <x-form.input.select-combo label="Category" class="select2_dd" id="product_category_id" modaltitle="Add&nbsp;Category" modalurl="{{route('product.categoryform')}}" btnid="add_category"  btnclass="btn-success openModalForm" btnicon="fa fa-plus-circle">
                                    <option value="">Select</option>
                                    @foreach ($categories as $key=>$category)
                                    <option value="{{$category->id}}" data-url ="{{route('product.subcatapi',$category->id)}}" {{(isset($product->product_category_id) && $product->product_category_id==$category->id)? 'selected' :''}}>{{$category->name}}</option>
                                    @endforeach
                                </x-form.input.select-combo>
                            </div>
                            <div class="col-md-4">
                                <x-form.input.select-combo label="Sub-Category" class="select2_dd" id="product_sub_category_id" modaltitle="Add&nbsp;Sub-Category" modalurl="{{route('product.subcategoryform')}}" btnid="add_subcategory" btnclass="btn-success openModalForm" btnicon="fa fa-plus-circle">
                                    <option value="">Select</option>
                                    @if (Route::currentRouteName()=='product.edit')
                                        @foreach ($sub_categories as $key=>$sub_category)
                                    <option value="{{$sub_category->id}}" {{(isset($product->product_sub_category_id) && $product->product_sub_category_id==$sub_category->id)? 'selected' :''}}>{{$sub_category->name}}</option>
                                    @endforeach
                                    @endif
                                </x-form.input.select-combo>
                            </div>
                            <div class="col-md-4">
                                <x-form.input.select-combo label="Brand" class="select2_dd" id="product_brand_id" modaltitle="Add&nbsp;Brand" modalurl="{{route('product.brandform')}}" btnid="add_brand" btnclass="btn-success openModalForm" btnicon="fa fa-plus-circle">
                                    <option value="">Select</option>
                                    @foreach ($brands as $key=>$brand)
                                    <option value="{{$brand->id}}" {{(isset($product->product_brand_id) && $product->product_brand_id==$brand->id)? 'selected' :''}}>{{$brand->name}}</option>
                                    @endforeach
                                </x-form.input.select-combo>
                            </div>

                            <div class="col-md-4">
                                <x-form.input.select-combo label="Manufacturer" class="select2_dd" id="product_manufacturer_id" modaltitle="Add&nbsp;Manufacturer" modalurl="{{route('product.manufacturerform')}}" btnid="add_manufacturer" btnclass="btn-success openModalForm" btnicon="fa fa-plus-circle">
                                    <option value="">Select</option>
                                    @foreach ($manufacturers as $key=>$manufacturer)
                                    <option value="{{$manufacturer->id}}" {{(isset($product->product_manufacturer_id) && $product->product_manufacturer_id==$manufacturer->id)? 'selected' :''}}>{{$manufacturer->name}}</option>
                                    @endforeach
                                </x-form.input.select-combo>
                            </div>

                            <div class="col-md-4">
                                <x-form.input.select-combo label="Unit" class="select2_dd" id="product_unit_id" modaltitle="Add&nbsp;Unit" modalurl="{{route('product.unitform')}}" btnid="add_unit" btnclass="btn-success openModalForm" btnicon="fa fa-plus-circle">
                                    <option value="">Select</option>
                                    @foreach ($units as $key=>$unit)
                                    <option value="{{$unit->id}}" {{(isset($product->product_unit_id) && $product->product_unit_id==$unit->id)? 'selected' :''}}>{{$unit->name}}</option>
                                    @endforeach
                                </x-form.input.select-combo>
                            </div>
                            <div class="col-md-4">
                                <x-form.input.select label="Purchase Scan" class="select2_dd" id="product_scan_id" >
                                    <option value="">Select</option>
                                    @foreach ($scans as $key=>$scan)
                                    <option value="{{$scan->id}}" {{(isset($product->product_scan_id) && $product->product_scan_id==$scan->id)? 'selected' :''}}>{{$scan->name}}</option>
                                    @endforeach
                                </x-form.input.select>
                            </div>

                            <div class="col-md-4">
                                <x-form.input.select label="Country" class="select2_dd" id="country_id">
                                    <option value="">Select</option>
                                    @foreach ($countries as $key=>$country)
                                    <option value="{{$country->id}}" {{(isset($product->country_id) && $product->country_id==$country->id)? 'selected' :''}}>{{$country->name}}</option>
                                    @endforeach
                                </x-form.input.select>
                            </div>

                            <div class="col-md-4">
                                <x-form.input.select label="Status" class="select2_dd" id="status" >
                                    <option value="">Select</option>
                                    <option value="1" {{(isset($product->status) && $product->status==1)? 'selected' :''}}>Active</option>
                                    <option value="2" {{(isset($product->status) && $product->status==2)? 'selected' :''}}>De-Active</option>
                                </x-form.input.select>
                            </div>

                            <div class="col-md-8">
                                <x-form.input.text id="certificate" label="Certificate" class="form-control" placeholder="Product Certificate" value="{{(isset($product->certificate)!='')?$product->certificate :''}}"/>
                            </div>

                            <div class="col-md-4">
                                <x-form.input.number id="stock" label="Minimum Stock" class="form-control" placeholder="0" value="{{(isset($product->stock)!='')?$product->stock :''}}"/>
                            </div>

                            <div class="col-md-4">
                                <x-form.input.text id="modelno" label="Model No" class="form-control" placeholder="Model Number" value="{{(isset($product->modelno)!='')?$product->modelno :''}}"/>
                            </div>

                            <div class="col-md-4">
                                <x-form.input.text id="brandno" label="Brand No" class="form-control" placeholder="Brand Number" value="{{(isset($product->brandno)!='')?$product->brandno :''}}"/>
                            </div>

                            <div class="col-md-4">
                                <x-form.input.currency id="cost" label="Cost" class="form-control" placeholder="0.00" value="{{(isset($product->cost)!='')?$product->cost :''}}"/>
                            </div>

                            <div class="col-md-4">
                                <x-form.input.currency id="price" label="Price" class="form-control" placeholder="0.00" value="{{(isset($product->price)!='')?$product->price :''}}"/>
                            </div>

                            <div class="col-md-4">
                                <x-form.input.number id="warranty" label="Warranty Days" class="form-control" placeholder="0" value="{{(isset($product->warranty)!='')?$product->warranty :''}}"/>
                            </div>

                            <div class="col-md-4">
                                <x-form.input.text id="barcode" label="Barcode" class="form-control" placeholder="0" value="{{(isset($product->barcode)!='')?$product->barcode :''}}"/>
                            </div>

                            <div class="col-md-8">
                                <x-form.input.textarea id="description" label="Description" class="form-control" rows="8" placeholder="Product Description" value="{{(isset($product->description)!='')?$product->description :''}}"/>
                            </div>

                            <div class="col-md-4">
                                <x-form.input.dropify id="_productimage" label="Product Image" class="form-control"  default="{{(isset($product->image) && $product->image !='')?asset('products_img/'.$product->image):asset('img/defaultproduct.png')}}" />
                            </div>
                        </div>
                        <div class="col-md-4" style="margin: auto;"><input id="submit" type="submit" class="form-control btn btn-success" value="submit"></div>
                    </form>
                        </div>
                    </div>

    @include('dashboard.products.modals.forms')

@endsection
@push('css')
<link rel="stylesheet" href="{{ asset('css/select2.css') }}">
<link rel="stylesheet" href="{{ asset('css/select2-bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('css/dropify.css') }}">

@endpush
@push('js')
<script src="{{ asset('js/select2.full.js') }}"></script>
<script src="{{ asset('js/dropify.js') }}"></script>
    <script>
        $(".select2_dd").select2({
    theme: 'bootstrap4',
});
    </script>
    <script>
        // $(".dropify").dropify();
        $('.dropify').dropify({
    messages: {
        'default': '<p style="font-size:15px;">Drag and drop a file here or click</p>',
        'replace': '<p style="font-size:15px;">Drag and drop or click to replace</p>',
        'remove':  'Remove',
        'error':   'Ooops, something wrong happended.'
    }
});

    </script>
        <script>
            $("#product_category_id").on('select2:select', function (e) {
                    $('#product_sub_category_id').empty();
                    $('#product_sub_category_id').append($("<option></option>")
                                .attr("value","")
                                .text("Select"));
                    if($("#product_category_id").find(':selected').attr('value')!=''){
                        $('#product_sub_category_id').empty();
                        $('#product_sub_category_id').append($("<option></option>")
                        .attr("value","")
                        .text("Loading..."));
                        $.get($("#product_category_id").find(':selected').attr('data-url') , function( data, status) {
                            console.log(data);
                            if(data!="[]"){
                              $('#product_sub_category_id').empty();
                            $('#product_sub_category_id').append($("<option></option>")
                                .attr("value","")
                                .text("Select"));
                            $.each(JSON.parse(data), function( k, v ) {
                                $('#product_sub_category_id').append($("<option></option>")
                                .attr("value",v.id)
                                .text(v.name));
                            });
                            }
                            else{
                                $('#product_sub_category_id').empty();
                            $('#product_sub_category_id').append($("<option></option>")
                                .attr("value","")
                                .text("Select"));
                            }

                        });
                    }
                $("#product_sub_category_id").select2({
                    theme: 'bootstrap4',
                });
            });
        </script>

    <script>
        $(".openModalForm").click(function () {
            $("#modalSubmit").hide();
            var title = $(this).attr('modaltitle');
            var url = $(this).attr('modalurl');
            $(".modal-body").empty();
            $(".modal-title").empty();
            $(".modal-title").append(title);
            $(".modal-body").append("<div class='text-center'><div class='spinner-border text-primary'></div></div>");
            $.get(url, function (data) {
                $(".modal-body").empty();
                $(".modal-body").append(data);
                $("#modalSubmit").attr("value","Submit");
                $("#modalSubmit").show();
                // console.log(data);
                }
            );
            $("#formModal").modal();
        });

        $("#modalSubmit").click(function () {
            var url = $("#modalForm").attr('action');
            var formData = $("#modalForm").serialize();
            var appends = $("#modalAfter").attr("append-to");
                $("#modalSubmit").attr("value","Creating parent");
                $.post(url, formData, function (data, status) {
                if(status=="success"){
                    console.log(data);
                    $("#modalSubmit").attr("value","Created");
                    data = JSON.parse(data)
                            console.log(data);
                            if(appends=="product_category_id"){
                                $('#'+appends).append("<option value='"+data["id"]+"' data-url='"+data["lasturl"]+"'>"+data["name"]+"</option>");
                            }
                            else{
                                $('#'+appends).append("<option value='"+data["id"]+"'>"+data["name"]+"</option>");
                            }

                    $(".modal-body").empty();
                    $(".modal-title").empty();
                    $("#formModal").modal("hide");

                }

                else{
                    $("#modalSubmit").attr("value","Submit");
                }
                }
            );




            // $("#formModal").modal();
        });

    </script>

    <script>
    $(document).ready(function() {
    $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});
    </script>
@endpush
