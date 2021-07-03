<x-form.form id="modalForm" action="{{route('product_brand.store')}}" method="POST">
    <input type="hidden" name="_modalform" id="_modalform" value="1">
<x-form.input.text id="name" label="Brand Name" otherattr="required" class="form-control" placeholder="Brand Name"/>
<x-form.input.textarea id="description" label="Description" class="form-control" rows="8" placeholder="Brand Description" />
{{-- <input type="submit" value="Submit" id="submit" class="btn btn-success"> --}}

</x-form.form>
<div id="modalAfter" append-to="product_brand_id" data-url="{{route('product.lastbrandapi')}}"></div>
