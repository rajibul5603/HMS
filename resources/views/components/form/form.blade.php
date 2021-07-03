<form enctype="multipart/form-data" action="{{$action ?? ''}}" class="was-validated {{$class ?? ''}}" id="{{$id ?? ''}}" method="{{$method ?? ''}}">
@csrf
{{$slot ?? ''}}
</form>
