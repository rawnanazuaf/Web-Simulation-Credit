<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additional_Fee extends Model
{
    protected $table = 'additional_fee';
    protected $fillable = ['id','prod_type','adm_fee','provisi'];
}
