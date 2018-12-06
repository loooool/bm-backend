<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    protected $fillable = ['user_id',
        'model_id','floor_id', 'block_id','state'];
    public function user(){
        return $this->hasOne('App\User','id','user_id');
    }

    public function contract() {
        return $this->hasOne('App\Contract', 'user_id', 'user_id');
    }
}
