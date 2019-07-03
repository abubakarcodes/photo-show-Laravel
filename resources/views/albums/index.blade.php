@extends('layouts.app')
@section('content')
@if(count($albums) > 0)

<div id="albums">

<div class="grid-x">
    @foreach($albums->all() as $album)

    <div class="cell small-3 text-center">
        <a href="/albums/{{$album->id}}">
            <img class="thumbnail image-size"  src="storage/albums_cover/{{$album->cover_image}}" alt="{{$album->name}}">
        </a>
        <br>
        <h4>{{$album->name}}</h4>
        
            
        </div>
    
        @endforeach
</div>
    
</div>
@else
<div>
<p>There are no albums Yets. Please Create an album</p>
</div>
@endif
@endsection

