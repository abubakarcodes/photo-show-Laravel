<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\album;
class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::with('photos')->get();
        
        return view('albums.index')->with('albums' , $albums);
    }

    public function create(){
        return view('albums.create');
    }

    public function store(Request $request){
        $this->validate($request , [
            'name' =>  'required',
            'cover_image' => 'image|max:1999'
        ]);
            //filename with extension
        $fileNameExt =  $request->file('cover_image')->getClientOriginalName();

        //file name without extension
        $fileName = pathinfo($fileNameExt , PATHINFO_FILENAME);

        //file Extension
        $fileExt = $request->file('cover_image')->getClientOriginalExtension();

        //unique file name to store image
         $fileNameToStore = $fileName . time() . '.' . $fileExt;

         //path where to store, path will be storage/app/public/albums_cover and we dont want to show this
         //on front-end folders so we use ==>php artisan storage:link
        $path = $request->file('cover_image')->StoreAs('public/albums_cover' , $fileNameToStore);

            //creating a album 
            $album = new Album;
            $album->name = $request->input('name');
            $album->description = $request->input('description');
            $album->cover_image = $fileNameToStore;
            $album->save();
            return redirect('/')->with('success' , 'Album Created');


    
    }


    public function show($album_id){
            $album = Album::with("photos")->find($album_id);;
            return view('albums.show')->with("album", $album);
    }
}
