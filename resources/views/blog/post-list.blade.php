@extends('layouts.app')

@section('content')
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>{{ $post->title }}</h2>
            </li>
        @endforeach
    </ul>
@endsection

@section('sidebar')
    <h1>I am a sidebar!</h1>
@endsection