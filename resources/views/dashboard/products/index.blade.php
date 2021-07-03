@extends('dashboard.layouts.app')
@section('main')


                    <div class="container-fluid">
                        <h1 class="mt-4">Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active">Products</li>

                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fa fa-boxes mr-1"></i>
                                Product List
                                <a href="{{route('product.create')}}" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus-circle"></i> Add Product</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>SN.</th>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Parent</th>
                                                <th>Category</th>
                                                <th>Sub-Category</th>
                                                <th>Brand</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- {{dd($products)}} --}}
                                            @foreach ($products as $key=> $product )

                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$product->code}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->productParent->name}}</td>
                                                <td>{{$product->productCategory->name}}</td>
                                                <td>{{$product->productSubCategory->name}}</td>
                                                <td>{{$product->productBrand->name}}</td>
                                                <td>
                                                    @can('product.edit')
                                                        <a href="{{route('product.edit',$product->id)}}" class="btn btn-sm btn-success" data-toggle="tooltip" title="Edit"><i class="fa fa-pen"></i></a>
                                                    @endcan
                                                    @can('product.destroy')
                                                        <a href="{{route('product.destroy',$product->id)}}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                    @endcan
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection

@push('js')
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
@endpush
