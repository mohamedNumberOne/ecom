<?php

namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Category ;
 

class verifynbpro
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if(   count( Category::all()   ) <= 0   ) {
            // return  count(Product::all()) ; 
            return redirect() -> route('categories_page') 
            -> with( ['msg'  => "Ajouter une catégorie dabord" , "class" => "warning" ] ) ; 
        }

        return $next($request);
    }
}
