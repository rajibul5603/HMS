<div>
    <div class="form-group">
        <label for="{{$id ?? ''}}">{{$label ?? ''}}</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="{{$id ?? ''}}" id="{{$id ?? ''}}">
            <label class="custom-file-label" style="height: 200px;" for="{{$id ?? ''}}">Choose file</label>
        </div>
    </div>
</div>