@extends('layouts.master')
@section('title', "Idea #" . Str::headline(request()->idea->id))

@section('content')
<div class="col-6">
    <x-layouts.alert-messages></x-layouts.alert-messages>
    <div class="card p-3">
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
            </div>
        </div>


        {{-- card body --}}
        <div class="card-body">
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

            <hr>

            @foreach ($idea->comments->sortDesc() as $comment)
                <div class="d-flex align-items-start">
                    <div class="w-100">
                        <div class="px-3 pt-4 pb-2">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                    src="{{$comment->user->getProfileUrl()}}" alt="Avatar">
                                    <a href="{{route('users.show', $comment->user->id)}}">
                                        {{$comment->user->name}}
                                    </a>
                                </div>
                                <small class="fs-6 fw-light text-muted"> {{ $comment->created_at }} </small>
                            </div>
                        </div>
                        <p class="fs-6 mt-3 fw-light ">
                            <div class="d-flex align-items-center justify-content-between">
                                {{ $comment->content }}
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
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
<div class="col-3">
    @include('layouts.rightbar')
</div>
@endsection
