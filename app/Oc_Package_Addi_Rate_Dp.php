<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oc_Package_Addi_Rate_Dp extends Model
{
    protected $table = 'oc_package_addi_rate_dp';
    protected $fillable = ['packageID','dpType','addRate','baseAddRate','gap'];
}
