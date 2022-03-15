@extends('layouts.dashboards')

@section('content')
    @foreach ($posts as $post)
        @if($post->published)
            <h1> {{$post->title}} </h1>
            <p> {{$post->content}} </p>
            <span> {{$post->created_at}} </span>
        @endif
    @endforeach
@endsection