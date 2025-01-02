<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use  App\Http\Controllers\CompanyController ;

class CategoryController extends CompanyController
{
    /**
     * Display a listing of the resource.
     */
    public function all_categories()
    {
        $all_categories = Category::all() ;
        return view("all_categories"  , compact("all_categories") ) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function show_category(   $id )
    {
        $category = Category::find($id) ;
        return view("details_category" , compact("category") ) ;
    }

 
}
