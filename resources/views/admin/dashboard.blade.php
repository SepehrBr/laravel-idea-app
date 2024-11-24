@extends('admin.layouts.master')
@section('title', 'Admin Pandel')

@section('content')
<div class="col-9">
    <h1>Admin Panel</h1>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            @include('admin.layouts.widget', [
                'title' => 'Total Users:',
                'icon' => 'fas fa-users',
                'users' => $users->count(),
            ])
        </div>
        <div class="col-sm-6 col-md-4">
            @include('admin.layouts.widget', [
                'title' => 'Total Ideas:',
                'icon' => 'fas fa-lightbulb',
                'users' => $ideas->count(),
            ])
        </div>
        <div class="col-sm-6 col-md-4">
            @include('admin.layouts.widget', [
                'title' => 'Total Comments:',
                'icon' => 'fas fa-comment',
                'users' => $comments->count(),
            ])
        </div>
    </div>
</div>
@endsection
