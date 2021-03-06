@extends("layouts.app")

@section("content")
    <h1>POSTS</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card p-3 mt-3 mb-3">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <p> {!!$post->body!!}</p>
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found.</p>
    @endif
@endsection