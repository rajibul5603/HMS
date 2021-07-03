<div>
    <div class="form-group mb-3">
        <label for="{{$id ?? ''}}">{{$label ?? ''}}</label>
        <div class="input-group">
            <select id="{{$id ?? ''}}" class="form-control {{$class ?? ''}}" name="{{$id ?? ''}}" id="{{$id ?? ''}}" placeholder="{{$placeholder ?? ''}}" {{$otherattr ?? ''}} aria-label="{{$label ?? ''}}">
            {{$slot ?? ''}}
            </select>
        </div>

      </div>
</div>
