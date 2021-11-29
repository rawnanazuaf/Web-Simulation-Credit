<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    protected $table = 'oc_showroom';
    protected $fillable = ['dealerID','showroomID','showroomName','showroomLocation','showroomBrand'];
}
