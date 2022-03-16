@extends('layouts.dashboards')

@section('content')
    <a href="/">
        <h1>TURN TO HOME</h1>
    </a>
    <div class="create">
        <h2><a href="{{route("admin.posts.create")}}">Nuovo Post</a></h2>
    </div>
    @foreach ($posts as $post)
        @if($post->published)
            <h1> {{$post->title}} </h1>
            <p> {{$post->content}} </p>
            <p> <strong>Slug</strong>: {{$post->slug}} </p>
            <span> Creato il : {{$post->created_at}} </span>
            <br><br>

            <a href="{{route('admin.posts.show' , $post->id)}}">
                VISUALIZZA
            </a>
            <a href="{{route('admin.posts.edit' , $post->id)}}">
                MODIFICA
            </a>

    
            <form class="confirm-delete" method="POST" action="{{route('admin.posts.destroy' , $post->id)}}">
                @csrf
                @method("DELETE")

                <div class="button-choice">
                    <a href="">
                        <button class="yes-btn" type="submit" value="cancella">CANCELLA</button>
                    </a>
                </div>
            </form> 
        @endif
    @endforeach
@endsection