<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{ protected  $fillable = array('album_id', 'photo' , 'title', 'size', 'description');
   public function albums(){
       return $this->belongsTo('App\album');
   }
}
