<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads = "/images/";


    protected $fillable=['file'];


//    讓images的path 前面都加“/images/”

    public function getFileAttribute($photo){


        return $this->uploads.$photo;

    }
}
