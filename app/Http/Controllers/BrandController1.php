<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;
use DB;
use Session;

class BrandController1 extends Controller
{

   //Brand Add
    public function addBrand(){
        return view('admin.brand_add');
    }

     //public function saveBrand(Request $request){
        //return $request;
        //return $request->all();
    //}

//Eloquent ORM system
     public function saveBrand(Request $request){ 

     $request->validate([
//'brand_name' => 'required'
'brand_name' => 'required|unique:brands,brand_name|max:50',
//'key' => 'required|unique:tablename,fieldname|max:50'
     ]);//form validation

         $brand = new Brand();
         $brand->brand_name = $request->brand_name;
         //$brand->brand_slug = str_replace(' ', '-', $request->brand_name);
         $brand->brand_slug = $this->slug_generator($request->brand_name);
         $brand->save();

//Query Builder System
      //Brand::create($request->all());

//3rd way
   //    DB::table('brands')->insert([
   //    'brand_name' => $request->brand_name
   // ]);

         //return 'Success data';
         //return back();
         //return redirect('brand/add-brand');
         //return redirect()->back();

         //return back()->with('message', 'Brand save success!');

         Session::flash('success', 'Session Brand save success!');
         return back();
    }



     public function slug_generator($string){
      $string = str_replace(' ', '-', $string);
      $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

      return strtolower(preg_replace('/-+/', '-', $string));
     }



//Brand Manage
     public function manageBrand(){
     //return Brand::all();
     //return Brand::get();
     //return Brand::orderBy('id', 'DESC')->get();
     //return Brand::where('id', 12)->get(); multi data
     //return Brand::where('id', 12)->first();//single data

     $brand = Brand::orderBy('id', 'DESC')->get();
        return view('admin.brand_manage', compact('brand'));
    }


    public function inactive($id){
//return $id;;
      //return Brand::find($id);
      $brand = Brand::find($id);
      $brand->status = 0;
      $brand->save();

      Session::flash('success', 'Brand inactive success!');
         return back();
    }


     public function active($id){
      //return $id;
       //return Brand::find($id);
      $brand = Brand::find($id);
      $brand->status = 1;
      $brand->save();

      Session::flash('success', 'Brand active success!');
         return back();
    }


    //Ajax
         public function brandStatus($id, $status){
      //return $id;
       //return Brand::find($id);
      $brand = Brand::find($id);
      $brand->status = $status;
      $brand->save();
         return response()->json(['message' => 'Ajax Success']);
    }


      public function delete($id){
      //return $id;
       //return Brand::find($id);
      $brand = Brand::find($id);
      $brand->delete();

      Session::flash('success', 'Brand delete success!');
         return back();
    }


      public function edit($id){
		  $row = Brand::find($id);
		  //return  $row;
      return view('admin.brand_edit', compact('row'));
    }
	
	public function updateBrand(Request $request){ 
	//return $request;
	
	 $request->validate([
//'brand_name' => 'required'
'brand_name' => 'required|unique:brands,brand_name|max:50',
//'key' => 'required|unique:tablename,fieldname|max:50'
     ]);//form validation
	
	$brand = Brand::find($request->id);
	//return $brand;
	 $brand->brand_name = $request->brand_name;
	 //$brand->brand_slug = str_replace(' ', '-', $request->brand_name);
	 $brand->brand_slug = $this->slug_generator($request->brand_name);
	 $brand->save();
	 
	 Session::flash('success', 'Brand update success!');
	 return back();
	}


}
