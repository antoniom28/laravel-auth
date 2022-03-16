@extends('layouts.dashboards')

@section('content')
    @if ($post->published)
        <div class="card">
            <h1> {{$post->title}} </h1>
            <p> {{$post->content}} </p>
            <p> <strong>Slug</strong>: {{$post->slug}} </p>
            <span> Creato il : {{$post->created_at}} </span>
        </div>
        <a href="/admin/posts">
            <h3 class="mt-2">Back to post</h3>
        </a>
    @else
        <h1>POST NON TROVATO</h1>
        <a href="/admin/posts">
            <h3 class="mt-2">Back to post</h3>
        </a>
    @endif
@endsection