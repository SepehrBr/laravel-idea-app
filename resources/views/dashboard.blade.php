@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="col-6">
    @auth
    <x-layouts.alert-messages></x-layouts.alert-messages>
    <h4> {{ __('idea.dashborad.header') }} </h4>
    <x-idea.create-idea></x-idea.create-idea>
    <hr>
    @endauth

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
                        </h5>
                    </div>
                </div>


                {{-- card body --}}
                <div class="card-body">
                    <div>
                        <p class="fs-6 fw-light text-muted">
                            {{ $idea->content }}
                            <a href="{{route('ideas.show', $idea->id) }}" class="mx-3 text-sm text-muted">
                                View Idea
                            </a>
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
                                    {{ $idea->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
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
                        @if ($idea->comments->count() == 0)
                        <h4 class="fs-5 fw-bold text-center d-flex justify-content-center align-items-center mt-4">
                            No Comments   );
                        </h4>
                        @endif
                    @endif
                </div>
            </div>
        @endforeach
        <div class="my-2">
            {{ $ideas->links() }}
        </div>
    </div>
</div>
<div class="col-3">
    @include('layouts.rightbar')
</div>
@endsection
