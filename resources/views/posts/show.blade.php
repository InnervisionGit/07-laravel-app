@extends("layouts.app")

@section("content")
    <a href="/posts" class="btn btn-outline-secondary" style="margin: 10px 0px 10px 0px">Go back</a>
    <h1>{{$post->title}}</h1>    
    <div>
        {!! $post->body !!}
    </div>
    <hr />
    <small>Writen on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr />
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>

    {!!Form::open(["action"=>["App\Http\Controllers\PostsController@destroy", $post->id], "method"=>"POST", "class"=>"float-right"])!!}
        {{Form::hidden("_method", "DELETE")}}
        {{Form::submit("Delete", ["class"=>"btn btn-danger"])}}
    {!!Form::close()!!}
@endsection