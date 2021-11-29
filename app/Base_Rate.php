<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Base_Rate extends Model
{
    protected $table = 'base_rate';
    protected $fillable = ['id','prod_type','category_no','base_rate','comment'];
}
