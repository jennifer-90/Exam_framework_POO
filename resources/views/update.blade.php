@extends('layout')

@section('title', 'Modification de votre profil')

@section('content')

    @if(session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
    @endif

    <h1>Modification de votre profil</h1>

    <form action="{{ route('updateUser', ['id' => $user->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">

        <div class="form-group">
            <label for="exampleInputPassword1">Ancien mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="o_password"
                   placeholder="Old Password">
        </div>
        <br>

        <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="n_password"
                   placeholder=" New password">
        </div>
        <br>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"
                   value="{{ $user->email }}">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <br>


        <button type="submit" class="btn btn-primary">Modifier</button>
    </form><br>

@endsection
