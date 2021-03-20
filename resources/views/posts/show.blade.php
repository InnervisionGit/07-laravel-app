@extends("layouts.app")

@section("content")
    <a href="/posts" class="btn btn-outline-secondary" style="margin: 10px 0px 10px 0px">Go back</a>
    <h1>{{$post->title}}</h1>    
    <div>
        {!! $post->body !!}
    </div>
    <hr />
    <small>Writen on {{$post->created_at}}</small>
    <hr />
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>
@endsection