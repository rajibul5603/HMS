<div>
    <div class="form-group">
        <label for="{{$id ?? ''}}">{{$label ?? ''}}</label>
        <textarea placeholder="{{$placeholder ?? ''}}" class="form-control {{$class ?? ''}}" rows="{{$rows ?? ''}}" id="{{$id ?? ''}}" style="{{$style ?? ''}}" name="{{$id ?? ''}}">{{$value ?? ''}}</textarea>
      </div>
</div>
