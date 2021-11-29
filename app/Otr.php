<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otr extends Model
{
    protected $table = 'otr';
    protected $fillable = ['id','model_no','model_year','otr','comment','created_at','updated_at'];

}
