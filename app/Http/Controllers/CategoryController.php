<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use  App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Storage;



class CategoryController extends CompanyController
{
    /**
     * Display a listing of the resource.
     */
    public function all_categories()
    {
        $all_categories = Category::all();
        return view("all_categories", compact("all_categories"));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function categories_page()
    {
        $all_categories = Category::all();
        return view("admin.categories",  compact('all_categories'));
    }

    public function create(StoreCategoryRequest $request)
    {

        // return $request ;


        if (
            $request->hasFile("photo_1") &&  $request->file('photo_1')->isValid()
            &&
            $request->hasFile("photo_2") &&  $request->file('photo_2')->isValid()

        ) {
            $msg = "";
            $class = "success";
            $path_photo_1 = $request->file('photo_1')->store('categories', 'public');
            $path_photo_2  = $request->file('photo_2')->store('categories', 'public');

            Category::create([

                "nom_category" =>  $request->nom_category,
                "petite_desc" =>  $request->petite_description,
                "grande_desc" =>  $request->grande_description,
                "photo_1" =>  $path_photo_1,
                "photo_2" => $path_photo_2,

            ]);

            $msg = "Categorie ajoutée  !";
        } else {
            $msg = "Erreur photo !";
            $class = "danger";
        }


        // -> 

        return redirect()->back()->with(["msg" =>   $msg, 'class' => $class]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function show_category($id)
    {
        $category = Category::find($id);
        if ($category) {
            return view("details_category", compact("category"));
        } else {
            return redirect()->back();
        }
    }


    public function show_category_admin($id)
    {
        $category = Category::find($id);
        if ($category) {
            return view("admin.update_category", compact("category"));
        } else {
            return redirect()->back();
        }
    }


    public function delete_category($id)
    {
        $category = Category::find($id);

        file_exists($category->photo_1) ? unlink('storage/' .  $category->photo_1) : "";
        file_exists($category->photo_2) ? unlink('storage/' .  $category->photo_2) : "";

        $category->delete();
        $msg = "Catégorie supprimé !";
        $class = "danger";
        return redirect()->back()->with(["msg" =>   $msg, 'class' => $class]);
    }


    public function update_category($id, UpdateCategoryRequest $request)
    {
        $category = Category::find($id);



        $msg = "";
        $class = "success";

        if ($request->hasFile("photo_1") &&  $request->file('photo_1')->isValid()) {



            if ($category->photo_1 && Storage::disk('public')->exists($category->photo_1)) {
                Storage::disk('public')->delete($category->photo_1);
            }

            $path_photo_1 = $request->file('photo_1')->store('categories', 'public');

            $category->update([
                "photo_1" =>  $path_photo_1,

            ]);
        }


        if ($request->hasFile("photo_2") &&  $request->file('photo_2')->isValid()) {

            if ($category->photo_2 && Storage::disk('public')->exists($category->photo_2)) {
                Storage::disk('public')->delete($category->photo_2);
            }

            $path_photo_2  = $request->file('photo_2')->store('categories', 'public');

            $category->update([
                "photo_2" =>  $path_photo_2,

            ]);
        }


        $category->update([
            "nom_category" =>  $request->nom_category,
            "petite_desc" =>  $request->petite_description,
            "grande_desc" =>  $request->grande_description,
        ]);



        $msg = "Catégorie modifiée !";
        $class = "success";



        return redirect()->back()->with(["msg" =>   $msg, 'class' => $class]);
    }
}
