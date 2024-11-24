@props(['active' => false])
<li class="nav-item">
    <a
        {{ $attributes->merge([
            'class' => 'nav-link ' . $active ? 'active' : ''
        ]) }}
        aria-current="{{ $active ? 'page' : 'false'}}"
        >
            {{ $slot }}
        </a>
</li>
