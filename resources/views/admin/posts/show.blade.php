@extends('layouts.dashboards')

@section('content')
    @if ($post->published)
        <div class="card">
            <h1> {{$post->title}} </h1>
            <p> {{$post->content}} </p>
        </div>
    @else
        <h1>POST NON TROVATO</h1>
    @endif
@endsection