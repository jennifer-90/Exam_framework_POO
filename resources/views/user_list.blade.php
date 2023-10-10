
@extends('layout')

@section('title','Les copains')

@section('content')
    <h1>* * PAGE ADMIN * *</h1><br>

    <h2>Les copains:</h2>
    <table class="table">
        <thead class="table table-dark">
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>EMAIL</th>
            <th>DERNIERE CONNEXION</th>
            <th>ADMIN</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)

            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->lastlogin }}</td>
                <td>{{ $user->admin }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
