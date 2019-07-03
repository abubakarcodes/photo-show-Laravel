@extends('layouts.app')
@section('content')
<h1>{{$photo->title}}</h1>
<p>
    {{$photo->description}}
</p>
<a href="/albums/{{$photo->album_id}}" class="button secondary">Go Back</a>
<hr>
<img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}" class="thumbnail">

{!! Form::open(["action" => ["PhotosController@destroy" , $photo->id] , "Method" => "post"]) !!}

{!! Form::hidden("_method" , "DELETE") !!}

{!! Form::submit("Delete Photo", ["class" => "button alert"]) !!}


{!! Form::close() !!}



@endsection