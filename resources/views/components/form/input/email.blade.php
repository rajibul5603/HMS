<div>
    <div class="form-group">
        <label for="{{$id ?? ''}}">{{$label}}</label>
        <input type="email" class="form-control {{$class ?? ''}}" id="{{$id}}"  name="{{$id ?? ''}}" placeholder="{{$placeholder ?? ''}}" style="{{$style ?? ''}}" {{$otherattr ?? ''}} value="{{$value ?? ''}}">
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
</div>
