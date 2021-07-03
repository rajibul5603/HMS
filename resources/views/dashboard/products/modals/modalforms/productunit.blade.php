<x-form.form id="modalForm" action="{{route('product_unit.store')}}" method="POST">
    <input type="hidden" name="_modalform" id="_modalform" value="1">
<x-form.input.text id="name" label="Unit Name" otherattr="required" class="form-control" placeholder="Unit Name"/>
<x-form.input.textarea id="description" label="Description" class="form-control" rows="8" placeholder="Unit Description" />
{{-- <input type="submit" value="Submit" id="submit" class="btn btn-success"> --}}

</x-form.form>
<div id="modalAfter" append-to="product_unit_id" ></div>
