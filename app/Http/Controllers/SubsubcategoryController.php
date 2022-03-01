<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubsubcategoryController extends Controller
{
    //Manage category
    public function manageSubsubCategory(){
        return view('admin.category.manage-subsubcategory');
    }
}
