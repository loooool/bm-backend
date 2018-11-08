<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    protected $fillable = ['user_id',
        'model_id','floor_id', 'block_id','state'];

}
