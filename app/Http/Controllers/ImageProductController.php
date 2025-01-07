<?php

namespace App\Http\Controllers;

use App\Models\Image_product;
use App\Models\Product;
use App\Http\Requests\StoreImage_productRequest;
use App\Http\Requests\UpdateImage_productRequest;

class ImageProductController extends Controller
{


    public function supp_img_slider(UpdateImage_productRequest $request)
    {
        // return dd($request); 
        // >

        if (is_array($request->img_supp) &&   count($request->img_supp) > 0 ) {
            
            foreach ($request->img_supp as $id_file) {

                $img =    Image_product::find($id_file);
                $img->delete();

                if (file_exists('storage/' . $img->path_image)) {
                    unlink('storage/' . $img->path_image); // Supprime le fichier

                }
            }


            $msg = "Image Supprimée !";
            $class = "success";

        } else {

            $msg = "Erreur Image slider   !";
            $class = "danger";
        }




        return redirect()->back()->with(['msg' => $msg,  'class' => $class]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreImage_productRequest $request) {}

    /**
     * Display the specified resource.
     */
    public function show(Image_product $image_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image_product $image_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImage_productRequest $request, Image_product $image_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image_product $image_product)
    {
        //
    }
}
