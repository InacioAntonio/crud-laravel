@extends('master')

@section('content')

<h2>Users</h2>
aaaaaaaaaaaaaa
<ul>
    @foreach ($users as $user)
        <li>{{$user->firstName}}</li>
    @endforeach
</ul>

@endsection
