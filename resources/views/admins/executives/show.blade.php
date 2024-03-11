@extends('admins.layouts.app')
@section('title', 'Show Executive user')
@section('content')
{{-- <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Executive users</h1>
    </div>

</div> --}}

<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Executive users</h1> --}}
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-8">
                    <h4 class="m-0 font-weight-bold text-primary">Show Executive users</h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.executive-users.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <ul>
                    <li>ID: {{ $user->id }}</li>
                    <li>Name : {{ $user->name }}</li>
                    <li>Email : {{ $user->email }}</li>
                </ul>
                <a href="{{ route('admin.executive-users.index') }}" class="btn btn-secondary">Back Executive users</a>
            </div>
        </div>
    </div>

</div>
@endsection
