<x-form.form id="modalForm" action="{{route('product_parent.store')}}" method="POST">
    <input type="hidden" name="_modalform" id="_modalform" value="1">
<x-form.input.text id="name" label="Parent Name" otherattr="required" class="form-control" placeholder="Parent Name"/>
<x-form.input.textarea id="description" label="Description" class="form-control" rows="8" placeholder="Parent Description" />
{{-- <input type="submit" value="Submit" id="submit" class="btn btn-success"> --}}

</x-form.form>
<div id="modalAfter" append-to="product_parent_id" data-url="{{route('product.lastparentapi')}}"></div>
