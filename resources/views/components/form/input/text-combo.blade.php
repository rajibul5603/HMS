<div>
    <div class="input-group mb-3">
        <label for="{{$id ?? ''}}">{{$label ?? ''}}</label>
        <input type="text" class="form-control {{$class ?? ''}}" placeholder="{{$placeholder ?? ''}}" id="{{$id ?? ''}}" name="{{$id ?? ''}}" aria-label="{{$label ?? ''}}" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn {{$btnclass ?? ''}}" id="{{$btnid ?? ''}}" type="button"><i class="{{$btnicon ?? ''}}"></i>{{$btnlabel ?? ''}}</button>
        </div>
      </div>
</div>
