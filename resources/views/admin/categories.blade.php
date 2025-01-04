<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorie') }}
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



                        <form class="row g-3 needs-validation" novalidate action="{{ route('add_category') }}"
                            enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="col-md-4 position-relative">
                                <label for="validationTooltip01" class="form-label"> Nom categorie </label>
                                <input type="text" class="form-control" id="validationTooltip01" required
                                    name="nom_category">
                                <div class="invalid-tooltip">
                                    Ajouter un nom
                                </div>
                                @error('nom_category')
                                    <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-md-4 position-relative">
                                <label for="validationTooltip02" class="form-label">photo_1 </label>
                                <input type="file" class="form-control" id="validationTooltip02" required
                                    accept="image/*" name="photo_1">
                                <div class="invalid-tooltip">
                                    Ajouter photo_1
                                </div>
                                @error('photo_1')
                                    <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-md-4 position-relative">
                                <label for="validationTooltipUsername" class="form-label">photo_2</label>
                                <div class="input-group has-validation">

                                    <input type="file" class="form-control" id="validationTooltipUsername" required
                                        accept="image/*" name="photo_2">
                                    <div class="invalid-tooltip">
                                        Ajouter photo_2
                                    </div>
                                </div>
                                @error('photo_2')
                                    <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>




                            <div class="col-md-6 col-12 position-relative">
                                <label for="validationTooltip06" class="form-label">petite description</label>
                                <textarea id="validationTooltip06" class="form-control" required rows="5" name="petite_description"></textarea>

                                <div class="invalid-tooltip">
                                    Ajouter une description
                                </div>
                                @error('petite_description')
                                    <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-md-6  col-12 position-relative">
                                <label for="validationTooltip07" class="form-label">grande description</label>
                                <textarea id="validationTooltip07" class="form-control" required rows="10" name="grande_description"></textarea>

                                <div class="invalid-tooltip">
                                    Ajouter une description
                                </div>
                                @error('grande_description')
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

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 mt-5">
                <h3 class="mb-3">Liste des catégories </h3>
                <table class="table table-striped table-hover">
                    <tr>
                        <td> Catégorie </td>
                        <td> photo 1 </td>
                        <td> photo 2 </td>
                        <td> petite description </td>
                        <td> grande description </td>
                        <td> date création </td>
                        <td> action </td>
                    </tr>
                    @foreach ($all_categories as $category)
                        <tr>
                            <td> {{ $category->nom_category }} </td>
                            <td>
                                <img src="{{ asset('storage/' . $category->photo_1) }}" alt="img" width="50px">
                            </td>
                            <td>
                                <img src="{{ asset('storage/' . $category->photo_2) }}" alt="img" width="50px">
                            </td>
                            <td> {{ $category->petite_desc }} </td>
                            <td> {{ $category->grande_desc }} </td>
                            <td> {{ $category->created_at ? $category->created_at->format('Y/m/d') : 'Date inconnue' }}
                            </td>
                            <td>

                                <form action="{{ route('delete_category', $id = $category->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="supprimer">
                                </form>

                                <a href="{{ route('show_category_admin', $id = $category->id) }}"
                                    class="btn btn-primary mt-2"> modifier </a>
                            </td>
                        </tr>
                    @endforeach
                </table>

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
