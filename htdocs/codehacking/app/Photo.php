<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $upload = '/codehacking/public/images/';

    protected $fillable = ['file'];


    public function getPhotoAttributes($photo)
    {
        return $this->upload . $photo;

    }
}
