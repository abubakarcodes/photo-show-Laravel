@extends("layouts.app")
@section('content')
<h1>{{$album->name}}</h1>
<a href="/" class="button secondary">Go Back</a>
<a href="/photos/create/{{$album->id}}" class="button">Upload Photos to Album</a>
<hr>
@if(count($album->photos) > 0)

<div id="photos">

<div class="grid-x">
    @foreach($album->photos as $photo)

    <div class="cell small-3 text-center">
            <a href="/photos/{{$photo->id}}">
                  <img class="thumbnail image-size"  src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
            </a>
          
        
        <br>
        <h4>{{$photo->title}}</h4>
        
            
        </div>
    
        @endforeach
</div>
    
</div>
@else
<div>
<p>There are no Photos Yet. Please Upload Photos</p>
</div>
@endif
@endsection