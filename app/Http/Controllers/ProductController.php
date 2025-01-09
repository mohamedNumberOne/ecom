<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Image_product;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Controllers\CompanyController;

use function Livewire\store;

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


        $all_categories = $this->get_all_cat();
        $all_pro = Product::join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.nom_category')  // Sélectionner le produit et le nom de la catégorie
            ->get();

        return view('admin.products_admin', compact('all_pro', "all_categories"));
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


            file_exists('storage/' . $pro->photo_principale) ? unlink('storage/' .  $pro->photo_principale) : "";

            $msg = "Produit supprimé !";
            $class = "danger";
            $pro->delete();
        } else {
            $msg = "Erreur dans le id produit  !";
            $class = "danger";
        }



        return redirect()->back()->with(["msg" =>   $msg, 'class' => $class]);
    }


    public function update_product_page($id)
    {
        $pro = Product::find($id);
        $all_categories = $this->get_all_cat();


        $images_slider = $pro->images;

        $msg = "Produit modifié !";
        $class = "success";
        if ($pro) {
            $cat =  $pro->category;
            return view("admin.update_product", compact('pro', "all_categories", "cat", "images_slider"));
        } else {

            return redirect()->back();
        }
    }





    public function update_product($id, UpdateProductRequest $request)
    {
        $pro = Product::find($id);
       
        if ($pro) {

            $path_photo_principale =  $pro->photo_principale;

            if ($request->hasFile('photo_slide')) {

                // $request -> file('photo_slide') -> isValid()
                $uploadedFiles = $request->file('photo_slide'); // Récupère tous les fichiers
                // $filePaths = [];

                if ($uploadedFiles) {
                    foreach ($uploadedFiles as $file) {
                        // Stocke chaque fichier dans un répertoire
                        $path = $file->store('produits', 'public'); // Stocke dans storage/app/public/uploads
                        // $filePaths[] = $path; 

                        // Enregistre dans la base de données
                        Image_product::create([

                            'path_image' => $path,
                            'product_id' => $pro->id,
                        ]);
                    }
                }
            }

            if ($request->hasFile("photo_principale") &&  $request->file('photo_principale')->isValid()) {

                $path_photo_principale =   $request->file('photo_principale')-> store(  'produits' ,  'public' );
            }

            // > photo_principale
            $pro->update([

                'nom_pro'  => $request->nom_pro,
                'photo_principale'  => $path_photo_principale,
                'prix'  => $request->prix,
                'type_mesure'  => $request->type_mesure,
                'details'  => $request->details,
                'category_id'  => $request->category_id,

            ]);

            $msg = "Produit modifié !";
            $class = "success";
        } else {
            $msg = "Erreur !";
            $class = "danger";
        }

        return redirect()->back()->with(['msg' => $msg, 'class' => $class]);
    }
}
