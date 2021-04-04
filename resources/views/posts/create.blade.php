@extends("layouts.app")

@section("content")
    <h1>Create post</h1>
    {!! Form::open(["action"=> "App\Http\Controllers\PostsController@store", "method"=>"POST"]) !!}
        <div class="form-group">
            {{Form::label("title", "Title")}}
            {{Form::text("title", "", ["class"=> "form-control", "placeholder"=>"Title"])}}
        </div>
        <div class="form-group">
            {{Form::label("body", "Body")}}
            {{Form::textarea('body','', ['name' => 'ckeditor', 'class' => 'ckeditor form-control', 'placeholder' => 'Body Text', 'id' => 'ckeditor'])}}
        </div>
        {{Form::submit("Submit", ["class"=>"btn btn-primary"])}}
    {!! Form::close() !!}
@endsection
