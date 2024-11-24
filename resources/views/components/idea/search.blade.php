@extends('layouts.master')
@section('title', 'Search')

@section('content')
<div class="col-6">

    <h1 class="fw-bold text-center">Searched Jobs - ({{$ideas->count()}})</h1>
    @forelse ($ideas as $idea)
    <div class="card p-3 mt-3">
        {{-- user profile --}}
        <div class="d-flex align-items-center">
            <img style="width:50px" class="me-2 avatar-sm rounded-circle"
            src="{{$idea->user->getProfileUrl()}}" alt="Avatar">
            <div class="w-100 d-flex justify-content-between align-items-center">
                    <a href="{{route('users.show', $idea->user->id)}}">
                        {{$idea->user->name}}
                    </a>
                    {{-- @if (Auth::user()->id == $id) TODO--}}
                    <div>
                        <form action="{{ route('ideas.destroy', $idea->id ) }}" method="post" id="delete-idea">
                            @csrf
                            @method('DELETE')
                            <x-layouts.btn class="btn btn-danger btn-sm"> Delete </x-layouts.btn>
                        </form>
                    </div>
                    {{-- @endif --}}
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
                    {{-- @if (Auth::user()->id == $id) TODO --}}
                        <a href="{{route('ideas.edit', $idea->id) }}" class="mx-3 text-sm text-muted">
                            Edit
                        </a>
                        {{-- @endif --}}
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
                                                <a href="#">
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
                                                <a href="#">
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
                            </p>
                        </div>
                    </div>
                @endforeach
                @if (Route::is('home'))
                    <a href="{{route('ideas.show', $idea->id) }}" class="btn btn-success" >Add Comment</a>
                @endif
            @endif
        </div>
    </div>
    @empty
        <h3 class="fw-bold text-center">Nothing Found!</h3>
    @endforelse
    <a href="/" class="fw-bold text-center my-3">Back To Ideas</a>

</div>
<div class="col-3">
    @include('layouts.rightbar')
</div>
@endsection
