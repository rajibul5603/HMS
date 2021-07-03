<x-form.form id="modalForm" action="{{route('product_category.store')}}" method="POST">
    <input type="hidden" name="_modalform" id="_modalform" value="1">
<x-form.input.text id="name" label="Category Name" otherattr="required" class="form-control" placeholder="Category Name"/>
<x-form.input.select label="Parent" class="select2_dd" id="product_parent_id" otherattr="required" >
    <option value="">Select</option>
    @foreach ($parents as $key=>$parent)
    <option value="{{$parent->id}}" {{(isset($product->product_parent_id)==$parent->id)? 'selected' :''}}>{{$parent->name}}</option>
    @endforeach
</x-form.input.select>
<x-form.input.textarea id="description" label="Description" class="form-control" rows="8" placeholder="Category Description" />
{{-- <input type="submit" value="Submit" id="submit" class="btn btn-success"> --}}

</x-form.form>
<div id="modalAfter" append-to="product_category_id" subcat-url="{{route('product.subcatapi','lastid')}}" data-url="{{route('product.lastcategoryapi')}}"></div>
