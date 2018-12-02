<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    protected $fillable = ['title','content','video'];


    public function photos(){
        return $this->morphMany('App\Photo', 'imageable');
    }

}
