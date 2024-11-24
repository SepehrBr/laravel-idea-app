<div class="col-3">
    <div class="card overflow-hidden">
        <div class="card-body pt-3">
            <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                <x-layouts.links :active="Route::is('admin.dashboard')" href="{{ route('admin.dashboard') }}" >Dashboard</x-layouts.links>
                <x-layouts.links :active="Route::is('admin.users.index')" href="{{ route('admin.users.index') }}" >Users</x-layouts.links>
                <x-layouts.links :active="Route::is('admin.ideas.index')" href="{{ route('admin.ideas.index') }}" >Ideas</x-layouts.links>
                <x-layouts.links :active="Route::is('admin.comments.index')" href="{{ route('admin.comments.index') }}" >Comments</x-layouts.links>
            </ul>
        </div>
    </div>
</div>
