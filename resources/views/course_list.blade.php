@extends('layout')

@section('title','Nos cours')

@section('content')
    <h1>Les cours</h1>
    <table class="table">
        <thead class="table table-dark">
        <tr>
            <th>NOM</th>
            <th>CODE</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
                <td>{{ $course->code }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
