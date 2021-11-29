<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oc_Disaster_Type extends Model
{
    protected $table = 'oc_disaster_type';
    protected $fillable = ['disasterTypeID','disasterTypeName'];
}
