<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insrate extends Model
{
    protected $table = 'insrate';
    protected $fillable = ['id','ins_type','ins_no','from_val','to_val','fstyear','sndyear','vhc_type','comment'];
}
