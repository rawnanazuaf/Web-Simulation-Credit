<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package_Model_Rate extends Model
{
    protected $table = 'oc_package_model_rate';
    protected $fillable = ['packageID','modelID','otr','baseRate','modelRate','modelBelowRate'];
}
