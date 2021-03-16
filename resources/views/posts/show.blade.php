@extends("layouts.app")

@section("content")
    <a href="/posts" class="btn btn-outline-secondary" style="margin: 10px">Go back</a>
    <h1>{{$post->title}}</h1>    
    <div>
        {!! $post->body !!}
    </div>
    <hr />
    <small>Writen on {{$post->created_at}}</small>
@endsection