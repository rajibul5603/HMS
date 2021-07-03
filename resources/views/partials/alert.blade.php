@if ($message = Session::get('success'))
<script type="text/javascript">
    pushNotify();

    function pushNotify() {
        new Notify({
            status: 'success',
            title: 'Success',
            text: '{{$message}}',
            effect: 'slide',
            speed: 300,
            customClass: null,
            customIcon: null,
            showIcon: true,
            showCloseButton: true,
            autoclose: true,
            autotimeout: 6000,
            gap: 20,
            distance: 20,
            type: 3,
            position: 'x-center top'
        })
    }
</script>
@endif

@if ($message = Session::get('error'))
<script type="text/javascript">
    pushNotify();

    function pushNotify() {
        new Notify({
            status: 'error',
            title: 'Error',
            text: '{{$message}}',
            effect: 'fade',
            speed: 300,
            customClass: null,
            customIcon: null,
            showIcon: true,
            showCloseButton: true,
            autoclose: true,
            autotimeout: 6000,
            gap: 20,
            distance: 20,
            type: 3,
            position: 'x-center top'
        })
    }
</script>
@endif

@if ($message = Session::get('warning'))
<script type="text/javascript">
    pushNotify();

    function pushNotify() {
        new Notify({
            status: 'warning',
            title: 'Warning',
            text: '{{$message}}',
            effect: 'fade',
            speed: 300,
            customClass: null,
            customIcon: null,
            showIcon: true,
            showCloseButton: true,
            autoclose: true,
            autotimeout: 6000,
            gap: 20,
            distance: 20,
            type: 1,
            position: 'x-center top'
        })
    }
</script>
@endif



@if ($errors->any())

<script type="text/javascript">
    pushNotify();

    function pushNotify() {
        new Notify({
            status: 'error',
            title: 'error',
            text: '{{$message}}',
            effect: 'fade',
            speed: 300,
            customClass: null,
            customIcon: null,
            showIcon: true,
            showCloseButton: true,
            autoclose: true,
            autotimeout: 6000,
            gap: 20,
            distance: 20,
            type: 1,
            position: 'x-center top'
        })
    }
</script>

@endif