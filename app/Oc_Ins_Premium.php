<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oc_Ins_Premium extends Model
{
    protected $table = 'oc_ins_premium';
    protected $primaryKey = 'insrncPremiumID';
    protected $keyType = 'string';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
    protected $fillable = ['wilayahID','insrncPremiumID','disasterTypeID','insrncTypeNo','insrncType','fromVal','toVal','firstYear','secondYear','createdAt','updatedAt','updatedBy'];
}
