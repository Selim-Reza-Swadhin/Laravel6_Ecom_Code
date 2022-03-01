<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
      use SoftDeletes;//for delete table fields name

//Query Builder System
    protected $fillable = ['category', 'category_slug'];


//Relationship categories and sub_categories table
    public function subCategories(){
//return $this->hasMany(SubCategory::class);//SubCategory is model name
return $this->hasMany(SubCategory::class)->where('status', 1);//SubCategory is model name
    }
}
