<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oc_Brand extends Model
{
    protected $table = 'oc_brand';
    protected $primaryKey = 'brandID';
    protected $keyType = 'string';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
    protected $fillable = ['brandID','brandName','createdAt','updatedAt','updatedBy'];
}
