@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}
style="background: #ecf0f3; box-shadow: inset 5px 5px 20px #cccccc, inset -5px -5px 20px #f4f4f4;">