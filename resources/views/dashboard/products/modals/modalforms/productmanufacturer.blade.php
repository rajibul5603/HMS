<x-form.form id="modalForm" action="{{route('product_manufacturer.store')}}" method="POST">
    <input type="hidden" name="_modalform" id="_modalform" value="1">
    <div class="row">
        <div class="col-md-6"><x-form.input.text id="name" label="Manufacturer Name" otherattr="required" class="form-control" placeholder="Manufacturer Name"/></div>
        <div class="col-md-6"><x-form.input.text id="contact_person" label="Contact Person"  class="form-control" placeholder="Contact Person"/></div>
        <div class="col-md-6"><x-form.input.text id="mobile" label="Contact Mobile" otherattr="pattern=[0-9]{11}" class="form-control" placeholder="Contact Mobile"/></div>
        <div class="col-md-6"><x-form.input.email id="email" label="Contact Email"  class="form-control" placeholder="Contact Email"/></div>
        <div class="col-md-6"><x-form.input.text id="web" label="Web"  class="form-control" placeholder="https://"/></div>
        <div class="col-md-6"><x-form.input.number id="rank" label="Rank"  class="form-control" placeholder="Rank"/></div>
        <div class="col-md-6"><x-form.input.textarea id="address" label="Address" class="form-control" rows="4" placeholder="Manufacturer Address" /></div>
        <div class="col-md-6"><x-form.input.textarea id="main_products" label="Main Products" class="form-control" rows="4" placeholder="Manufacturer Main Products" /></div>
        <div class="col-md-12"><x-form.input.textarea id="description" label="Description" class="form-control" rows="4" placeholder="Manufacturer Description" /></div>

    </div>










{{-- <input type="submit" value="Submit" id="submit" class="btn btn-success"> --}}

</x-form.form>
<div id="modalAfter" append-to="product_manufacturer_id" ></div>
