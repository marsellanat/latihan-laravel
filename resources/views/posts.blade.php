@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
        <h2>{{ $posts['title'] }}</h2>
        <h5>{{ $posts['author'] }}</h5>
        <p>{{ $posts['body'] }}</p>
    @endforeach
    
@endsection
