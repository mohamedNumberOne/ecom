<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Controllers\CompanyController ;

class ProductController extends CompanyController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_pro = Product::all() ;
        return view( 'all_pro' , compact('all_pro') ) ; 
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
    public function store(StoreProductRequest $request)
    {
        //
    }


}
