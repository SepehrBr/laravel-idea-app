{{-- edit idea --}}
@if (session('message') == 'Idea Edited Successfully!')
<x-layouts.alerts type="success">
    {{ session('message') }}
</x-layouts.alerts>
@endif
@if (session('message') == 'Sth Went Wrong Please try Again Later ...')
<x-layouts.alerts type="danger">
    {{ session('message') }}
</x-layouts.alerts>
@endif

{{-- post comment --}}
@if (session('message') == 'Comment Successfully Posted!')
<x-layouts.alerts type="success">
    {{ session('message') }}
</x-layouts.alerts>
@endif
@if (session('message') == 'Sth Went Wrong Please try Again Later ...')
<x-layouts.alerts type="danger">
    {{ session('message') }}
</x-layouts.alerts>
@endif

{{-- registeration --}}
@if (str_contains(session('message'), 'Created Successfully!') && (url()->previous() == "http://localhost:8000/auth/register"))
    <x-layouts.alerts type="success">
        {{ session('message') }}
    </x-layouts.alerts>
@endif

{{-- login --}}
@if (str_contains(session('message'), 'Logged In'))
    <x-layouts.alerts type="success">
        {{ session('message') }}
    </x-layouts.alerts>
@endif

{{-- logout --}}
@if (str_contains(session('message'), 'Logged Out'))
    <x-layouts.alerts type="success">
        {{ session('message') }}
    </x-layouts.alerts>
@endif

{{-- create idea --}}
@if (session('message') == 'Idea Created Successfully!')
    <x-layouts.alerts type="success">
        {{ session('message') }}
    </x-layouts.alerts>
@endif
@if (session('message') == 'Sth Went Wrong Please try Again Later ...')
    <x-layouts.alerts type="danger">
        {{ session('message') }}
    </x-layouts.alerts>
@endif


{{-- update user --}}
@if (str_contains(session('message'), 'Updated Successfully') && (url()->previous() == "http://localhost:8000/users/".Auth::id()."/edit"))
    <x-layouts.alerts type="success">
        {{ session('message') }}
    </x-layouts.alerts>
@endif

{{-- follow user --}}
@if (str_contains(session('message'), 'Following'))
    <x-layouts.alerts type="success">
        {{ session('message') }}
    </x-layouts.alerts>
@endif
{{-- unfollow user --}}
@if (str_contains(session('message'), 'Unfollowed'))
    <x-layouts.alerts type="success">
        {{ session('message') }}
    </x-layouts.alerts>
@endif

{{-- admin comments --}}
@if (str_contains(session('message'), 'Comment Deleted') && (url()->previous() == "http://localhost:8000/admin/comments"))
    <x-layouts.alerts type="success">
        {{ session('message') }}
    </x-layouts.alerts>
@endif

{{-- admin idea --}}
@if (str_contains(session('message'), 'Comment Deleted') && (url()->previous() == "http://localhost:8000/admin/comments"))
    <x-layouts.alerts type="success">
        {{ session('message') }}
    </x-layouts.alerts>
@endif
