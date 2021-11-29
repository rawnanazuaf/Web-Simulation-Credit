<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'oc_showroom_package';
    protected $fillable = ['packageID','showroomID','packageName','adminFee','provisionRate','salesRate','spvRate','officeRate','incentiveCode','incentiveCodeMarketing'];
}
