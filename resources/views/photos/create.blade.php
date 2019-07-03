@extends('layouts.app')
@section('content')
<h1>Upload Photos</h1>
        {!! Form::open(['action' => 'PhotosController@store', 'method' => 'post', 'enctype' =>'multipart/form-data']) !!}
        {{Form::text('title', '', ['placeholder' => 'Enter Photo Name'])}}
        {{Form::hidden('album_id' , $album_id)}}
        {{Form::textarea('description' , '', ['placeholder' => 'Photo Description'])}}
        {{Form::file('photo')}}
        {{Form::submit('Submit' , ['class' => 'button'])}}
        {!! Form::close() !!}
@endsection