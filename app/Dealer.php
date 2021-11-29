<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    protected $table = 'oc_dealer';
    protected $fillable = ['wilayahID','dealerID','dealerName','productType'];
}
