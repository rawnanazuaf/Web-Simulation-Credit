<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oc_Package_Year_Rate extends Model
{
    protected $table = 'oc_package_year_rate';
    protected $fillable = ['packageID','modelYear','baseRate'];
}
