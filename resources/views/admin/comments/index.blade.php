@extends('admin.layouts.master')

@section('title', "Comment's Panel")

@section('content')
    <div class="col-9">
        <h1>Comment's Panel</h1>
        <x-layouts.alert-messages></x-layouts.alert-messages>
        <table class="table table-striped mt-3">
            <thead class="table-dark">
                <th>ID</th>
                <th>Content</th>
                <th>Author</th>
                <th>Idea</th>
                <th>Created At</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ Str::length($comment->content) > 30 ? Str::limit($comment->content, 20, ' ...') : $comment->content }}</td>
                        <td>
                            <a href="{{route('users.show', $comment->user->id)}}">{{ $comment->user->name }}</a>
                        </td>
                        <td>
                            <a href="{{route('ideas.show', $comment->idea->id)}}">{{ Str::limit($comment->idea->content, 15, ' ...') }}</a>
                        </td>
                        <td>{{ $comment->created_at->toDateTimeString() }}</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-between">
                                <form action="{{route('admin.comments.destroy', $comment->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">X</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="">
            {{ $comments->links() }}
        </div>
    </div>
@endsection
