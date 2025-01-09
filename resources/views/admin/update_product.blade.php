<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produits') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1 class="mb-4"> Modifier Le produit ' {{ $pro->nom_pro }} ' <i
                            class="fa-solid fa-pen-to-square"></i> </h1>

                    <div>

                        @if (session()->has('msg') && session()->has('class'))
                        <div class="alert alert-{{ session('class') }} text-center"> {{ session('msg') }} </div>
                        @endif


                        <form class="row g-3 needs-validation" novalidate
                            action="{{ route('update_product', [$pro->id]) }}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            @method('PUT')

                            <div class="col-md-6 position-relative">
                                <label for="validationTooltip01" class="form-label"> Nom Produit </label>
                                <input type="text" class="form-control" id="validationTooltip01"
                                    value="{{ $pro->nom_pro }}" name="nom_pro">
                                <div class="invalid-tooltip">
                                    Ajouter un nom
                                </div>
                                @error('nom_pro')
                                <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-md-6 col-12 position-relative">
                                <label class="form-label"> Catégorie </label>
                                <select class="form-control" required name="category_id">
                                    <option value=""> </option>

                                    @foreach ($all_categories as $categorie)

                                    @if ($categorie -> id == $pro -> category_id )
                                    <option value="{{ $categorie->id }}" selected> {{ $categorie->nom_category }}
                                    </option>
                                    @else
                                    <option value="{{ $categorie->id }}"> {{ $categorie->nom_category }} </option>
                                    @endif


                                    @endforeach
                                </select>

                                <div class="invalid-tooltip">
                                    Ajouter la Categorie
                                </div>
                                @error('category_id')
                                <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>

                            <hr>

                            <div class="col-md-12 position-relative">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <label for="validationTooltipUsername1" class="form-label">photo principale
                                        </label>
                                        <div class="input-group has-validation">

                                            <input type="file" class="form-control" id="validationTooltipUsername1"
                                                accept="image/*" name="photo_principale">

                                            <div class="invalid-tooltip">
                                                Ajouter photo principale
                                            </div>
                                        </div>


                                        @error('photo_principale')
                                        <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <img src=" {{ asset('storage/' . $pro->photo_principale) }} " width="100px"
                                            alt="photo_1">
                                    </div>
                                </div>

                            </div>

                            <hr>


                            <div class="col-md-6 col-12 position-relative">
                                <label class="form-label"> type mesure </label>
                                <select class="form-control" required name="type_mesure">

                                    <option value="{{ $pro->type_mesure }}"> {{ $pro->type_mesure }}</option>

                                    <option value="chaussures"> Chaussures </option>
                                    <option value="vetements"> Vetements </option>
                                </select>

                                <div class="invalid-tooltip">
                                    Ajouter une description
                                </div>
                                @error('type_mesure')
                                <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-md-6 col-12 position-relative">
                                <label class="form-label"> Prix </label>
                                <input type="number" class="form-control" name="prix" value="{{ $pro->prix }}">

                                <div class="invalid-tooltip">
                                    Ajouter le prix
                                </div>
                                @error('prix')
                                <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>


                            <hr>

                            <div class="col-md-6 col-12 position-relative">
                                <label for="validationTooltip06" class="form-label"> Détails </label>
                                <textarea id="validationTooltip06" class="form-control" rows="10"
                                    name="details">{{ $pro->details }}</textarea>

                                <div class="invalid-tooltip">
                                    Ajouter les details
                                </div>
                                @error('details')
                                <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>


                            
                            <div class="col-md-6 position-relative">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <label for="validationTooltipUsername" class="form-label">les photos
                                            slide</label>
                                        <div class="input-group has-validation">

                                            <input type="file" class="form-control" id="validationTooltipUsername"
                                                accept="image/*" name="photo_slide[]" multiple>

                                            <div class="invalid-tooltip">
                                                Ajouter photo_slide
                                            </div>
                                        </div>


                                        @error('photo_slide')
                                        <div class="bg-danger text-white d-inline-block p-1 ">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>


                                </div>

                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary mb-5" type="submit"> Modifier </button>
                            </div>
                        </form>

                        @if (count($images_slider) > 0)
                        <h4> Photos slide </h4>
                        <div class="col-md-6 col-12">
                            <form action="{{ route('supp_img_slider', $pro->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                @foreach ($images_slider as $img)
                                <div class="d-inline-block p-1 border"  >
                                    <img src=" {{ asset('storage/' . $img->path_image) }} " class="d-inline-block m-1"
                                        width="100px" alt="images_slider">
                                    <input type="checkbox" name="img_supp[]" value="{{ $img->id }}">
                                </div>
                                @endforeach
                                <br>
                                <center>
                                    <button class="btn btn-danger" type="submit"> Supprimer </button>
                                </center>
                            </form>
                        </div>
                        @endif

                    </div>


                </div>
            </div>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

</x-app-layout>