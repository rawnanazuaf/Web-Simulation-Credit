<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipeModel extends Model
{
    protected $table = 'tipemodel';
    protected $fillable = ['id','brand_id','model_no','model_nm','category_no','comment','vhc_type'];
}

