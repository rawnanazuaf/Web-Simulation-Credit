<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oc_Package_Addi_Rate_Ins extends Model
{
    protected $table = 'oc_package_addi_rate_ins';
    protected $fillable = ['packageID','insrncTypeID','insrncTypeName','insrncTypeRate'];
}
