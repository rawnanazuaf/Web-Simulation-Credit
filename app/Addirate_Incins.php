<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addirate_Incins extends Model
{
    protected $table = 'addirate_incins';
    protected $fillable = ['id','prod_type','inctype_cd','inctype_nm','addirate'];
}
