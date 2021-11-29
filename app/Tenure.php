<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenure extends Model
{
    protected $table = 'rate_tenure';
    protected $fillable = ['id','prod_type','year','rate','finalrate','comment'];
}
