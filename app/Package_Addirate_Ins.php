<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package_Addirate_Ins extends Model
{
    protected $table = 'oc_package_addi_rate_ins';
    protected $fillable = ['packageID','insrncTypeID','insrncTypeName','insrncTypeRate'];
}
