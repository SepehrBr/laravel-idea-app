@extends('layouts.master')

@section('title', "Editing Idea #" . Str::headline(request()->idea->id))

@section('content')
    <div class="col-6">
        <div class="mt-3">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                src="{{$idea->user->getProfileUrl()}}" alt="Avatar">
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <a href="{{route('users.show', $idea->user->id)}}">
                        {{$idea->user->name}}
                    </a>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">
                        Cancel
                    </a>
                </div>
            </div>

            {{-- card body --}}
            <div class="card-body mt-3">
                <form action="{{route('ideas.update',$idea->id )}}" method="post" id="update-idea-{{$idea->id}}">
                    @csrf
                    @method('PUT')
                    <textarea class="form-control mb-3" id="idea" rows="3" name="content">{{ $idea->content }}</textarea>
                </form>
                @error('content')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <form action="{{ route('ideas.destroy', $idea->id ) }}" method="post" id="delete-idea-{{$idea->id}}">
                    @csrf
                    @method('DELETE')
                </form>
                <div class=" flex align-items-center justify-content-around">
                    <x-layouts.btn class="btn btn-info btn-sm w-25" onclick="document.getElementById('update-idea-{{$idea->id}}').submit();">Edit</x-layouts.btn>
                    <x-layouts.btn class="btn btn-danger btn-sm w-25" onclick="document.getElementById('delete-idea-{{$idea->id}}').submit();"> Delete </x-layouts.btn>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        @include('layouts.rightbar')
    </div>
@endsection
