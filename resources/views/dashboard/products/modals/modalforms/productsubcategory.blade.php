<x-form.form id="modalForm" action="{{route('product_subcategory.store')}}" method="POST">
    <input type="hidden" name="_modalform" id="_modalform" value="1">
<x-form.input.text id="name" label="Sub-Category Name" otherattr="required" class="form-control" placeholder="Sub-Category Name"/>
<x-form.input.select label="Category" class="select2_dd" id="product_category_id" otherattr="required">
    <option value="">Select</option>
    @foreach ($categories as $key=>$category)
    <option value="{{$category->id}}" data-url ="{{route('product.subcatapi',$category->id)}}" {{(isset($product->product_category_id)==$category->id)? 'selected' :''}}>{{$category->name}}</option>
    @endforeach
</x-form.input.select>
<x-form.input.textarea id="description" label="Description" class="form-control" rows="8" placeholder="Sub-Category Description" />
{{-- <input type="submit" value="Submit" id="submit" class="btn btn-success"> --}}

</x-form.form>
<div id="modalAfter" append-to="product_sub_category_id" data-url="{{route('product.lastsubcategoryapi')}}"></div>
