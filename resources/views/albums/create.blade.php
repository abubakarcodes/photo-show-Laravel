@extends('layouts.app')
@section('content')
<h1>Create Albums</h1>
        {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'post', 'enctype' =>'multipart/form-data']) !!}
        {{Form::text('name', '', ['placeholder' => 'Enter Album Name'])}}
        {{Form::textarea('description' , '', ['placeholder' => 'Album Description'])}}
        {{Form::file('cover_image')}}
        {{Form::submit('Submit' , ['class' => 'button'])}}
        {!! Form::close() !!}
@endsection