<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    //Manage category
    public function manageCategory(){
        //return view('admin.category.manage-category');
        
//Eloquent ORM system
$data = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.manage-category', compact('data'));
    }


//Add Category
  public function  addCategory(){
return view('admin.category.add-category');
    }


//Eloquent ORM system
         public function saveCategory(Request $request){ 

     $request->validate([
//'category' => 'required'
'category' => 'required|unique:categories,category|max:50',
//'key' => 'required|unique:tablename,fieldname|max:50'
     ]);//form validation

         $category = new Category();
         $category->category = $request->category;
         //$category->category_slug = str_replace(' ', '-', $request->category);
         $category->category_slug = $this->slug_generator($request->category);
         $category->save();

         Session::flash('success', 'Session Category save success!');
         return back();
    }

        //Ajax
         public function categoryStatus($id, $status){
      //return $id;
       //return Category::find($id);
      $category = Category::find($id);
      $category->status = $status;
      $category->save();
         return response()->json(['message' => 'Ajax Category Success']);
    }

          public function delete($id){
      //return $id;
       //return Category::find($id);
      $category = Category::find($id);
      $category->delete();

      Session::flash('success', 'Category delete success!');
         return back();
    }


      public function edit($id){
          $row = Category::find($id);
          //return  $row;
      return view('admin.category.category_edit', compact('row'));
    }


         public function slug_generator($string){
      $string = str_replace(' ', '-', $string);
      $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

      return strtolower(preg_replace('/-+/', '-', $string));
     }
}
