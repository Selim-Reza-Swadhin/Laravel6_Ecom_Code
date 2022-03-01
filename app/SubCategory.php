<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
         //use SoftDeletes;//for delete table fields name

//Query Builder System
    protected $fillable = ['cat_id', 'sub_cat'];


    //Relationship categories and sub_categories table
    public function categoryFn(){
return $this->belongsTo(Category::class, 'cat_id');//Category is model name and cat_id is foreign key, came from sub_categories table
    }
}
