<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oc_Rate_Tenure extends Model
{
    protected $table = 'oc_rate_tenur';
    protected $fillable = ['packageID','tenureYear','tenureRate','finalRate'];
}
