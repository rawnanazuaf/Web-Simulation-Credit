<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oc_Ins_Rate extends Model
{
    protected $table = 'oc_ins_rate';
    protected $fillable = ['wilayahID', 'insrncRateID','insrncTypeID','insrncNo','fromVal','toVal','firstYear','secondYear','vehicleType'];
}
