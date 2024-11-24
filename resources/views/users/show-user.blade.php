@extends('layouts.master')
@section('title', Str::headline(request()->user->name) . "'s Profile")

@section('content')
<div class="col-6">
    <x-layouts.alert-messages></x-layouts.alerts>
        <div class="card">
            <div class="px-3 pt-4 pb-2">
                <div>
                    <div class="d-flex align-items-center justify-content-around">
                        <div class="d-flex align-items-center justify-content-center w-100">
                            <img style="width:100px" class="me-3 avatar-sm rounded-circle"
                            src="{{$user->getProfileUrl()}}" alt="{{$user->name}}">
                            <div>
                                <h3 class="card-title mb-0">
                                    <a href="{{route('users.show', $user->id )}}" > {{$user->name}} </a>
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            @if (Auth::id() == $user->id)
                            <a href="{{route('users.edit', ['user' => $user->id])}}" class="btn btn-dark mb-3">Edit Profile</a>
                            @endif
                            @can('delete', $user)
                            <form action="{{ route('users.destroy', [ 'user' => $user->id ]) }}" method="post" id="delete-user">
                                @csrf
                                @method('DELETE')
                                <x-layouts.btn class="btn btn-danger btn-sm"> Delete Account </x-layouts.btn>
                            </form>
                            @endcan
                        </div>
                    </div>
                    <div class="px-2 mt-4">
                        <h5 class="fs-5"> About : </h5>
                        <p class="fs-6 fw-light">
                            {{ $user->about }}
                        </p>
                        <div class="d-flex justify-content-start align-items-center mb-3">
                            <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-user me-1">
                                </span> {{ $user->followers()->count() }} Followers </a>
                            <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-brain me-1">
                                </span> {{ $user->ideas->count() }} Ideas</a>
                            <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-comment me-1">
                                </span> {{ $user->comments->count() }} Comments</a>
                                @auth
                                    @if (Auth::user()->isNot($user))
                                        @if (Auth::user()->follows($user))
                                            <form action="{{route('users.unfollow', $user->id )}}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm ms-2"> Unfollow </button>
                                            </form>
                                        @else
                                            <form action="{{route('users.follow', $user->id )}}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm ms-2"> Follow </button>
                                            </form>
                                        @endif
                                    @endif
                                @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <h4 class="fs-4 fw-bold text-center"> Shared Ideas: {{$ideas->count()}}</h4>
        @if ($ideas->count() > 0)
            <div class="mt-3">
                @foreach ($ideas as $idea)
                <div class="card p-3 mt-3">
                    {{-- user profile --}}
                    <div class="d-flex align-items-center">
                        <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                        src="{{$idea->user->getProfileUrl()}}" alt="Avatar">
                        <div class="w-100 d-flex justify-content-between align-items-center">
                                <a href="{{route('users.show', $idea->user->id)}}">
                                    {{$idea->user->name}}
                                </a>
                                @can('delete', $idea)
                                <div>
                                    <form action="{{ route('ideas.destroy', $idea->id ) }}" method="post" id="delete-idea">
                                        @csrf
                                        @method('DELETE')
                                        <x-layouts.btn class="btn btn-danger btn-sm"> Delete </x-layouts.btn>
                                    </form>
                                </div>
                                @endcan
                            </h5>
                        </div>
                    </div>

                    {{-- card body --}}
                    <div class="card-body">
                        <div>
                            <p class="fs-6 fw-light text-muted">
                                {{ $idea->content }}
                                @if (Route::is('home'))
                                <a href="{{route('ideas.show', $idea->id) }}" class="mx-3 text-sm text-muted">
                                    View Idea
                                </a>
                                @else
                                    @can('update', $idea)
                                        <a href="{{route('ideas.edit', $idea->id) }}" class="mx-3 text-sm text-muted">
                                            Edit
                                        </a>
                                    @endcan
                                @endif
                            </p>
                            <div class="d-flex justify-content-between">
                                <div>
                                    @if ($idea->liked(Auth::user()))
                                        <form action="{{route('ideas.dislike', $idea->id )}}" method="post">
                                            @csrf
                                            <button class="fw-light nav-link fs-6">
                                                <span class="fas fa-heart me-1"></span> {{$idea->likes_count}}
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{route('ideas.like', $idea->id )}}" method="post">
                                            @csrf
                                            <button class="fw-light nav-link fs-6">
                                                <span class="far fa-heart me-1"></span> {{$idea->likes_count}}
                                            </button>
                                        </form>
                                    @endif
                                </div>
                                <div>
                                    <span class="fs-6 fw-light text-muted">
                                        <span class="fas fa-clock"></span>
                                        {{ \Carbon\Carbon::parse($idea->created_at)->format('Y/m/d h:m') }}
                                    </span>
                                </div>
                            </div>
                            @if (!Route::is('home'))
                                <div class="my-3">
                                    <form action="{{route('create-comment', $idea->id)}}" method="post">
                                        @csrf
                                        <textarea class="fs-6 form-control mb-3" rows="1" name="content">{{ old('content') }}</textarea>
                                        @error('content')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <x-layouts.btn class="btn btn-dark btn-sm"> Post Comment </x-layouts.btn>
                                    </form>
                                </div>
                            @endif
                        </div>
                        <hr>
                        @if ($idea->comments->count() > 2 && Route::is('home'))
                            {{-- comments --}}
                            @foreach ([$idea->comments[1], $idea->comments[0]] as $comment)
                                <div class="d-flex align-items-start">
                                    <div class="w-100">
                                        <div class="px-3 pt-4 pb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                                    src="{{$comment->user->getProfileUrl()}}" alt="Avatar">
                                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                                            <a href="{{route('users.show', $comment->user->id)}}">
                                                                {{$comment->user->name}}
                                                            </a>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <small class="fs-6 fw-light text-muted"> {{ $comment->created_at }} </small>
                                            </div>
                                        </div>
                                        <p class="fs-6 mt-3 fw-light ">
                                            {{ $comment->content }}
                                            @if (Auth::user()->id == $comment->user->id)
                                            <div class="d-flex align-items-center">
                                                {{-- TODO: create inline editing --}}
                                                <a href="#" class="mx-2 text-sm text-muted">
                                                    Edit
                                                </a>
                                                {{-- TODO: add action to delte --}}
                                                <form action="" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="#" class="mx-2 text-sm text-danger">
                                                        Delete
                                                    </a>
                                                </form>
                                            </div>
                                        @endif
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                            <a href="{{route('ideas.show', $idea->id) }}" class="btn btn-dark" >Load More Comments</a>
                            <a href="{{route('ideas.show', $idea->id) }}" class="btn btn-success" >Add Comment</a>
                        @else
                            @foreach ($idea->comments->sortDesc() as $comment)
                                <div class="d-flex align-items-start">
                                    <div class="w-100">
                                        <div class="px-3 pt-4 pb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                                    src="{{$comment->user->getProfileUrl()}}" alt="Avatar">
                                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                                        <a href="{{route('users.show', $comment->user->id)}}">
                                                            {{$comment->user->name}}
                                                        </a>
                                                    </div>
                                                </div>
                                                <small class="fs-6 fw-light text-muted"> {{ $comment->created_at }} </small>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="fs-6 mt-3 fw-light">
                                                {{ $comment->content }}
                                            </p>
                                            @if (Auth::id() == $comment->user->id)
                                                <div class="d-flex align-items-center">
                                                    {{-- TODO: create inline editing --}}
                                                    <a href="#" class="mx-2 text-sm text-muted">
                                                        Edit
                                                    </a>
                                                    {{-- TODO: add action to delte --}}
                                                    <form action="" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#" class="mx-2 text-sm text-danger">
                                                            Delete
                                                        </a>
                                                    </form>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @if ($idea->comments->count() == 0)
                                <h4 class="fs-5 fw-bold text-center d-flex justify-content-center align-items-center mt-4">
                                    No Comments   );
                                </h4>
                            @endif
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            {{ $ideas->links() }}
        @else
            @if (Auth::user()->id == $user->id)
                <h4 class="fs-5 fw-bold text-center d-flex flex-column justify-content-center align-items-center mt-5">
                    Empty   );
                    <a href="{{route('home')}}" class="btn btn-dark my-2">
                        Add New Idea
                    </a>
                </h4>
            @endif
        @endif
</div>
<div class="col-3">
    @include('layouts.rightbar')
</div>
@endsection
