<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oc_Dealer extends Model
{
    protected $table = 'oc_dealer';
    protected $primaryKey = 'dealerID';
    protected $keyType = 'string';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
    protected $fillable = ['wilayahID','dealerID','dealerName','productType','createdAt','updatedAt','updatedBy'];
}
