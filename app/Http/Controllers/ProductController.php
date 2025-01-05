<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Controllers\CompanyController;

class ProductController extends CompanyController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { // user 
        $all_pro = Product::all();
        return view('all_pro', compact('all_pro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function products_page_admin()
    {
        $all_pro = Product::all();
        $all_categories = $this->get_all_cat();
        return view('admin.products_admin', compact('all_pro', 'all_categories'));
    }

    public function get_all_cat()
    {
        return $all_categories = Category::select('nom_category', "id")->get();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {

        if (
            $request->hasFile("photo_principale") &&  $request->file('photo_principale')->isValid()
        ) {

            $path_photo =  $request->file('photo_principale')->store('produits',   'public');
            Product::create([

                'nom_pro'  =>  $request->nom_pro,
                'photo_principale' =>  $path_photo,
                'prix' => $request->prix,
                'type_mesure' => $request->type_mesure,
                'details' => $request->details,
                'category_id' => $request->category_id,

            ]);
            $msg = "Produit ajouté !";
            $class = "success";
        } else {
            $msg = "Erreur dans l'image  !";
            $class = "danger";
        }




        return redirect()->back()->with(["msg" =>   $msg, 'class' => $class]);
    }

    public function delete($id)
    {

        $pro = Product::find($id);

        if ($pro) {


            file_exists($pro->photo_principale) ? unlink('storage/' .  $pro->photo_principale) : "";

            $msg = "Produit supprimé !";
            $class = "danger";
            $pro->delete();
        } else {
            $msg = "Erreur dans le id produit  !";
            $class = "danger";
        }



        return redirect()->back()->with(["msg" =>   $msg, 'class' => $class]);
    }


    public function update_product($id)
    {
        $pro = Product::find($id);

        if ($pro)  {

            return view("admin.update_product" , compact('pro'));

        } else {
           
             return redirect()->back() ;
        }

    }
}
