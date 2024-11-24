@extends('admin.layouts.master')

@section('title', "Idea's Panel")

@section('content')
    <div class="col-9">
        <h1>Idea's Panel</h1>
        <table class="table table-striped mt-3">
            <thead class="table-dark">
                <th>ID</th>
                <th>Content</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($ideas as $idea)
                    <tr>
                        <td>{{ $idea->id }}</td>
                        <td>{{ Str::length($idea->content) > 30 ? Str::limit($idea->content, 20, ' ...') : $idea->content }}</td>
                        <td>
                            <a href="{{route('users.show', $idea->user->id)}}">{{ $idea->user->name }}</a>
                        </td>
                        <td>{{ $idea->created_at->toDateTimeString() }}</td>
                        <td>{{ ($idea->created_at == $idea->updated_at) ? "---" : $idea->updated_at->toDateTimeString() }}</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="{{route('ideas.show', $idea->id)}}">View</a>
                                <a href="{{route('ideas.edit', $idea->id)}}">Edit</a>
                                <form action="{{route('ideas.destroy', $idea->id)}}" method="post">
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
            {{ $ideas->links() }}
        </div>
    </div>
@endsection
