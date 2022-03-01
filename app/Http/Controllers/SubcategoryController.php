<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;

use Illuminate\Http\Request;
use Session;

class SubcategoryController extends Controller
{
        //Manage sub category
    public function manageSubCategory(){
        //return view('admin.category.manage-category');

//$data = Subcategory::all();
$data = Subcategory::with('categoryFn')->get();
        //return $data;

        return view('admin.category.manage-sub-category', compact('data'));


    }


    //Add Sub Category and Fatch Category for categories table
  public function  addSubCategory(){
    $categories = Category::where('status', 1)->orderBy('category', 'ASC')->get();
    //return $categories;
return view('admin.category.add-sub-category', compact('categories'));
    }

    //Eloquent ORM system
         public function saveSubCategory(Request $request){ 
            //return $request;
            //exit();

     $request->validate([
//'subcategory' => 'required'
//'sub_id' => 'required|unique:sub_categories,sub_id|max:3',
'sub_cat' => 'required',
//'key' => 'required|unique:tablename,fieldname|max:50'
     ]);//form validation

         $sub_category = new Subcategory();
         $sub_category->cat_id = $request->cat_id;
         $sub_category->sub_cat = $request->sub_cat;
         $sub_category->save();

         Session::flash('success', 'Session Sub Cat save success!');
         return back();
    }
}
