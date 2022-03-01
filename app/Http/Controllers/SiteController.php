<?php

namespace App\Http\Controllers;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        //return view('website.index');//index.blade.php
        //return view('website.home');

        //after code
        //Eloquent ORM system
        //Category.php
        //$categoriesfntpage = Category::get();
        //$categoriesfntpage = Category::orderBy('id', 'DESC')->get();
        //$categoriesfntpage = Category::where('status', 1)->get();
        //$categoriesfntpage = Category::with('subCategories')->where('status', 1)->get();//Category.php->subCategories()

        //Subcategory.php
        //$categoriesfntpage = Subcategory::get();
        //$categoriesfntpage = Subcategory::where('status', 1)->get();
        $categoriesfntpage = Subcategory::with('categoryFn')->where('status', 1)->get();//SubcategoryController.php
        //return $categoriesfntpage;
        return view('website.home', compact('categoriesfntpage'));
    }

     public function product()
    {
        return view('website.product');
    }
}
