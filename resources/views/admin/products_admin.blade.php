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


                    <h1 class="mb-4"> Ajouter <i class="fa-solid fa-square-plus"></i> </h1>

                    <div>
                        @if (session()->has('msg') && session()->has('class'))
                        <div class="alert alert-{{ session('class') }} text-center"> {{ session('msg') }} </div>
                        @endif

                        <form class="row g-3 needs-validation" novalidate action="{{ route('add_product') }}"
                            enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="col-md-4 position-relative">
                                <label for="validationTooltip01" class="form-label"> Nom Produit </label>
                                <input type="text" class="form-control" id="validationTooltip01" required
                                    name="nom_pro">
                                <div class="invalid-tooltip">
                                    Ajouter un nom
                                </div>
                                @error('nom_pro')
                                <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-md-4 position-relative">
                                <label for="validationTooltip02" class="form-label">photo principale </label>
                                <input type="file" class="form-control" id="validationTooltip02" required
                                    accept="image/*" name="photo_principale">
                                <div class="invalid-tooltip">
                                    Ajouter photo principale
                                </div>
                                @error('photo_principale')
                                <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-md-4 position-relative">
                                <label for="validationTooltip03" class="form-label"> Prix </label>
                                <input type="number" class="form-control" id="validationTooltip03" required name="prix">
                                <div class="invalid-tooltip">
                                    Ajouter le prix
                                </div>
                                @error('prix')
                                <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>



                            <div class="col-md-6 col-12 position-relative">
                                <label class="form-label"> type mesure </label>
                                <select class="form-control" required name="type_mesure">
                                    <option value=""></option>
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
                                <label class="form-label"> Catégorie </label>
                                <select class="form-control" required name="category_id">
                                    <option value=""> </option>
                                    @foreach ($all_categories as $cat)
                                    <option value="{{ $cat -> id }}"> {{ $cat -> nom_category }} </option>
                                    @endforeach
                                </select>

                                <div class="invalid-tooltip">
                                    Ajouter categorie
                                </div>
                                @error('category_id')
                                <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-md-6  col-12 position-relative">
                                <label for="validationTooltip07" class="form-label">details</label>
                                <textarea id="validationTooltip07" class="form-control" required rows="10"
                                    name="details"></textarea>

                                <div class="invalid-tooltip">
                                    Ajouter les details
                                </div>
                                @error('details')
                                <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>




                            <div class="col-12">
                                <button class="btn btn-primary" type="submit"> Ajouter </button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>

        @if (count($all_pro) > 0)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 mt-5">
                <h3 class="mb-3">Liste des Produits </h3>
                <table class="table table-striped table-hover">
                    <tr>
                        <td> Produit </td>
                        <td> photo Principale</td>
                        <td> prix </td>
                        <td> Catégorie </td>
                        <td> date création </td>
                        <td> action </td>
                    </tr>
                    @foreach ($all_pro as $pro)
                    <tr>
                        <td> {{ $pro-> nom_pro }} </td>
                        <td>
                            <img src="{{ asset('storage/' . $pro->photo_principale) }}" alt="img" width="50px">
                        </td>

                        <td> {{ $pro->prix }} </td>
                        <td> {{ $pro -> nom_category }} </td>
                        <td> {{ $pro->created_at ? $pro->created_at->format('Y/m/d') : 'Date inconnue' }}
                        </td>
                        <td>

                            <form action="{{ route('delete_product', $id = $pro->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="supprimer">
                            </form>

                            <a href="{{ route('update_product_page', $id = $pro->id) }}" class="btn btn-primary mt-2">
                                modifier </a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
        @endif
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