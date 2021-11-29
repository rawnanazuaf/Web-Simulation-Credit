<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance_Type extends Model
{
    protected $table = 'premium_ins';
    protected $fillable = ['id','disaster_type_no','ins_type_no','ins_type','from_val','to_val','fstyear','sndyear','comment'];
}
