<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'shop_admin_brand';
    protected $primaryKey='brand_id';
    protected $guarded = [];
}
