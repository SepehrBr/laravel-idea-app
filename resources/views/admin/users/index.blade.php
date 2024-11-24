@extends('admin.layouts.master')

@section('title', "User's Panel")

@section('content')
    <div class="col-9">
        <h1>User's Panel</h1>
        <table class="table table-striped mt-3">
            <thead class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Joined At</th>
                <th>Edited At</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->toDateTimeString() }}</td>
                        <td>{{ ($user->created_at == $user->updated_at) ? "---" : $user->updated_at->toDateString() }}</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="{{route('users.show', $user->id)}}">View</a>
                                <a href="{{route('users.edit', $user->id)}}">Edit</a>
                                <form action="{{route('users.destroy', $user->id)}}" method="post">
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
            {{ $users->links() }}
        </div>
    </div>
@endsection
