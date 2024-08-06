@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>User Profile</h1>
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $user['name'] }}</p>
            <p><strong>Email:</strong> {{ $user['email'] }}</p>
            <p><strong>Joined:</strong> {{ $user['joined'] }}</p>
        </div>
    </div>
@endsection
