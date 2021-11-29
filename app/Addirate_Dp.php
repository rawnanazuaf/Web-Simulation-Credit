<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addirate_Dp extends Model
{
    protected $table = 'addirate_dp';
    protected $fillable = ['id','prod_type','dptype_cd','addirate','base_addirate','gap','comment'];
}
