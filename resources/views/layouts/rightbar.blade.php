<x-layouts.sidebar-search></x-layouts.sidebar-search>

<div class="card mt-3">
    <x-layouts.side-title>Top Users</x-layouts.side-title>

    <div class="card-body">
        @foreach ($top_users as $user)
            <div class="hstack gap-2 mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="avatar">
                        <a href="{{ route('users.show', $user->id )}}">
                            <img
                            class="avatar-img rounded-circle"
                            src="{{ $user->getProfileUrl() }}"
                            width="30"
                            alt=""
                            />
                        </a>
                    </div>
                    <div class="overflow-hidden ms-2">
                        <a class="h6 mb-0" href="{{ route('users.show', $user->id )}}">{{ $user->name }}</a>
                    </div>
                </div>
                @auth
                    @if (Auth::user()->isNot($user))
                        @if (Auth::user()->follows($user))
                            <form action="{{route('users.unfollow', $user->id )}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger-soft rounded-circle icon-md ms-auto"> Unfollow </button>
                            </form>
                        @else
                            <form action="{{route('users.follow', $user->id )}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success-soft rounded-circle icon-md ms-auto"> Follow </button>
                            </form>
                        @endif
                    @endif
                @endauth
            </div>
        @endforeach
    </div>
</div>
