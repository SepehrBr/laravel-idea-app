@props([
    'class' => 'btn btn-dark'
])
<button {{ $attributes}} class="{{$class}}" type="submit"> {{ $slot }} </button>
