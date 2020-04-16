<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'shop_admin_category';
    protected $primaryKey='cate_id';
    protected $guarded = [];
}
