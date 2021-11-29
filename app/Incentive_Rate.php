<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incentive_Rate extends Model
{
    protected $table = 'incentive_rate';
    protected $fillable = ['brand_id','model_no','model_rate','model_below_rate','comment'];
}
