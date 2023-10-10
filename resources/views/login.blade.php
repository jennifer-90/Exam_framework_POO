@extends('layout')

@section('title', 'login')

@section('content')

    @error('username')
    <div class="alert alert-danger"> {{ $message }} </div>
    @enderror

    @error('password')
    <div class="alert alert-danger"> {{ $message }} </div>
    @enderror

    <h1>Connectez-vous</h1>

    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Name</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Votre nom">
        </div>
        <br>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                   placeholder="Password">
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form><br>

    <div><a href="{{ route('routecreate') }}">&#10145;&#65039; Création d'un compte</a></div>
@endsection
