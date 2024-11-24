<div class="col-3">
    <div class="card overflow-hidden">
        <div class="card-body pt-3">
            <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                <x-layouts.links :active="Route::is('home')" href="{{route('home')}}" >Home</x-layouts.links>
                <x-layouts.links :active="Route::is('terms')" href="{{route('terms')}}" >Terms</x-layouts.links>
                <x-layouts.links :active="Route::is('feed')" href="{{route('feed')}}" >Feed</x-layouts.links>
            </ul>
        </div>
        <x-layouts.footer-btn>View Profile</x-layouts.footer-btn>
    </div>
</div>
