<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
    protected $fillable = ['id','brand_id','brand_nm','prod_type','ord_no','brand_rate','spv_rate','majumtr_1stInctv','majumtr_2ndInctv','comment','created_at','updated_at'];

}
