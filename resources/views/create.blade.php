@extends('layout')

@section('title', 'Création de compte')

@section('content')

    <h1>Création d'un compte</h1>
    <form action="" method="POST">
        @csrf <!-- ajoute un input hiden qui contiendra un token de session de laravel-->

        <div class="form-group">
            <label for="username">Name</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Votre nom">
            @error('username')
            {{ $message }}
            @enderror
        </div>
        <br>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                   placeholder="Password">
            @error('password')
            {{ $message }}
            @enderror
        </div>
        <br>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"
                   placeholder="Enter email">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection


