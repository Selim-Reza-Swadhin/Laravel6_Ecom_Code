<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;//for delete table fields name

//Query Builder System
    protected $fillable = ['brand_name', 'brand_slug'];
}
