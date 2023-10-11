@extends('layout')

@section('title', 'Mon profile')

@section('content')

    <h1>Mon profil</h1>
    <table class="table">

        <thead class="table table-dark">
        <tr>
            <th>CHAMPS</th>
            <th>VOS INFORMATIONS</th>
        </tr>
        </thead>

        <tbody>

        @foreach($user as $key=>$value )
            <tr>
                <td>{{ucfirst($key) }}</td>
                <td>{{ $value }}</td>
            </tr>
        @endforeach

        </tbody>
    </table><br>

    <div><a href="{{ route('update', ['user' => $user->id]) }}">&#10145;&#65039; Modification du profil</a></div><br>


    <div><a href="{{ route('exportProfile') }}">&#10145;&#65039; Exporter le profil au format JSON</a></div>

@endsection



