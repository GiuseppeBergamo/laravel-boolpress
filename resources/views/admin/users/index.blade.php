@extends('layouts.app')


@section('content')
    @if(session('message'))
    <div class="alert alert-succes">
        {{ session('message')}}
    </div>
    @endif


<h1>Posts List</h1>
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">First Name</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">
            Email
        </th>
        <th scope="col">Posts</th>
        
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->userDetail->first_name }}</td>
                <td>{{ $user->userDetail->address }}</td>
                <td>{{ $user->userDetail->phone }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ count($user->posts) }}</td>
            </tr>

        @endforeach
    </tbody>
</table>

@endsection