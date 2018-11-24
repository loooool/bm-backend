<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = ['user_id','sent_date', 'completed_date', 'purchased_date'];
}
