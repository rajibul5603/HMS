<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-900" style="background: #ecf0f3;">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" style="background: #ecf0f3;
box-shadow: -3px -3px 7px #ffffff, 3px 3px 5px #ceced1;">
        <h1 style="text-align: center"> <strong>LOGIN FORM</strong> </h1>
        {{ $slot }}
    </div>
</div>




{{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-900">
    <div>
        {{ $logo }}
</div>

<div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
    <h1 style="text-align: center"> <strong>LOGIN FORM</strong> </h1>
    {{ $slot }}
</div>
</div> --}}