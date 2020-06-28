<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads = '/images/';

    protected $fillable = ['file'];

    // public function getFileAttribute($photo){
    //     return 'http://localhost/codehacking/public' . $this->uploads . $photo;
    // }
    public function getFile($photo){
        return 'http://localhost/codehacking/public' . $this->uploads . $photo;
    }

    // accessor_is magibrad chveulebrivi method rafgan accessor qmnis problemebs
    public function getFileName($photo){
        return $this->uploads . $photo;
    }
}
