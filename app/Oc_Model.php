<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oc_Model extends Model
{
    protected $table = 'oc_model';
    protected $fillable = ['modelID','brandID','modelName','vehicleType'];
}
