@extends('layouts.master')
@section('title', "Editing " . Str::headline(request()->user->name) . "'s Profile")

@section('content')
    <div class="col-6">
        <div class="card">
            <div class="px-3 pt-4 pb-2">
                <div class="d-flex flex-column justify-content-center w-100">
                    <form action="{{route('users.update', ['user' => $user->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="col-md-6 w-100 my-2">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="name" class="form-control " id="name" value="{{$user->name}}"  name="name">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 w-100 my-2">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control " id="email" value="{{$user->email}}"  name="email">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 w-100 my-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control " id="password"   name="password">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 w-100 my-2">
                            <label for="password_confirmation" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control " id="password_confirmation"   name="password_confirmation">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('password_confirmation')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 w-100 my-2">
                            <label for="profile" class="form-label">Your Profile Image</label>
                            <input type="file" class="form-control" id="profile" value="{{$user->getProfileUrl()}}"  name="profile">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            @error('profile')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <input type="hidden" name="about" id="about" value="{{$user->about}}">
                        <div class="col-md-6 w-100 my-3 d-flex align-items-center justify-content-center">
                            <button class="btn btn-info w-25 mx-4 " type="submit">Edit</button>
                            <a href="{{route('users.show', $user->id )}}" class="btn btn-danger w-25 mx-4" type="submit">Cancel</a>
                        </div>
                        <div class="px-2 mt-4">
                            <h5 class="fs-5"> About : </h5>
                            <div class="mb-3">
                                <textarea class="form-control" rows="3" name="about">{{ $user->about }}</textarea>
                            </div>
                            @error('about')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </form>
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
                                @can('delete-idea', $idea)
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
