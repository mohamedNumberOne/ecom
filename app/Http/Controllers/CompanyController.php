<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

use Illuminate\Support\Facades\View ;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        // Charger les données dynamiques dans toutes les vues
        return  View::share('companies_info', Company::first() ); // Exemple : toutes les catégories
    }

    public function index()
    {
         return view('about_us') ; 
        // $info_company =  Company::first() ;
        // return  $info_company ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function welcome_view()
    {
        return view('welcome'); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function all_categories( )
    {
        return view('all_categories'); 

    }

  
}
