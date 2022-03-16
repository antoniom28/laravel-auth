@extends('layouts.dashboards')

@section('content')
    <div class="create">
        <h2><a href="{{route("admin.posts.create")}}">Nuovo Post</a></h2>
    </div>
    @foreach ($posts as $post)
        @if($post->published)
            <h1> {{$post->title}} </h1>
            <p> {{$post->content}} </p>
            <p> {{$post->published}} </p>
            <p> <strong>Slug</strong>: {{$post->slug}} </p>
            <span> {{$post->created_at}} </span>
            <br><br>

            <a href="{{route('admin.posts.show' , $post->id)}}">
                VISUALIZZA
            </a>
            <a href="{{route('admin.posts.edit' , $post->id)}}">
                MODIFICA
            </a>
        @endif
    @endforeach
@endsection