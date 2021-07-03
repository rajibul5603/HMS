<div>
    <div class="form-group mb-3">
        <label for="{{$id ?? ''}}">{{$label ?? ''}}</label>
        <div class="input-group">
            <select id="{{$id ?? ''}}" class="form-control {{$class ?? ''}}" id="{{$id ?? ''}}" name="{{$id ?? ''}}" placeholder="{{$placeholder ?? ''}}" aria-label="{{$label ?? ''}}">
            {{$slot}}
            </select>
        <div class="input-group-append">
          <button class="btn {{$btnclass ?? ''}} " modaltitle={{$modaltitle ?? ''}} modalurl="{{$modalurl ?? ''}}" type="button" id="{{$btnid ?? ''}}"><i class="{{$btnicon ?? ''}}"></i>{{$btnlabel ?? ''}}</button>
        </div>
        </div>

      </div>
</div>
