<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Photo;

class PhotosController extends Controller
{
    public function create($album_id){
       return view("photos.create")->with('album_id' , $album_id);
    }

    public function store(Request $request){

        //validating fields
        $this->validate( $request,[

            'photo' => 'image|max:1999',
            'title' => 'required'
       

         ]);

         //getting file name of uploaded photo
         $filenameWithExt = $request->file('photo')->getClientOriginalName();
         //getting file extension to upload image
         $fileExtention = $request->file('photo')->getClientOriginalExtension();
         //filename without extention
         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          //filename to store
          $fileNameToStore = $filename . '_' . time() . '.' . $fileExtention;

          //path to store
          $path = $request->file('photo')->storeAs('/public/photos/'. $request->input('category'), $fileNameToStore);

         //storing in database
         $photo = new Photo;
         $photo->album_id  = $request->input('album_id');
         $photo->title = $request->input('title');
         $photo->description = $request->input('description');
         $photo->size = $request->file('photo')->getClientSize();
         $photo->photo = $fileNameToStore;
         $photo->save();
         return redirect('/albums/'.$request->input('album_id') )->with('success'  , 'Photo Uploaded');

          
    }

    public function show($id){
        $photo = Photo::find($id);
        return view('photos.show')->with('photo', $photo);

    }

    public function destroy($id)
    {
    try {
       $photo = Photo::find($id);
        if(Storage::delete("public/photos/".$photo->album_id."/".$photo->photo)){
            $photo->delete();
             return redirect('/')->with('success' , "Photo Deleted Successfully");
        }
    } catch (\Throwable $th) {
       return $th;
    }
        

       

    }
}
