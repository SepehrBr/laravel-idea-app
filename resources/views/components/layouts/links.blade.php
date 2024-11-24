@props(['active' => false ])
<li class="nav-item">
    <a
        {{ $attributes }}
        class="nav-link {{$active ? 'text-white bg-primary rounded' : '' }}"
        aria-current="{{ $active ? 'page' : 'false'}}"
    >
        <span>{{ $slot }}</span>
    </a>
</li>
