<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disaster_Type extends Model
{
    protected $table = 'disaster_type';
    protected $fillable = ['id','disaster_type_no','disaster_type','comment'];
}
