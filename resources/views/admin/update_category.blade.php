<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('categorie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1 class="mb-4"> Modifier la categorie ' {{ $category->nom_category }} ' <i class="fa-solid fa-pen-to-square"></i> </h1>

                    <div>

                        @if (session()->has('msg') && session()->has('class'))
                            <div class="alert alert-{{ session('class') }} text-center"> {{ session('msg') }} </div>
                        @endif


                        <form class="row g-3 needs-validation" novalidate action="{{ route('update_category' ,  [$category-> id ]) }}"
                            enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="col-md-6 position-relative">
                                <label for="validationTooltip01" class="form-label"> Nom category </label>
                                <input type="text" class="form-control" id="validationTooltip01"  
                                    value="{{ $category->nom_category }}" name="nom_category">
                                <div class="invalid-tooltip">
                                    Ajouter un nom
                                </div>
                                @error('nom_category')
                                    <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>
                            <hr>

                            <div class="col-md-12 position-relative">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <label for="validationTooltipUsername" class="form-label">photo_1</label>
                                        <div class="input-group has-validation">

                                            <input type="file" class="form-control" id="validationTooltipUsername"
                                                  accept="image/*" name="photo_1">

                                            <div class="invalid-tooltip">
                                                Ajouter photo_1
                                            </div>
                                        </div>


                                        @error('photo_1')
                                            <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <img src=" {{ asset('storage/' . $category->photo_1) }} " width="100px"
                                            alt="photo_1">
                                    </div>
                                </div>

                            </div>


                            <hr>

                            
                            <div class="col-md-12 position-relative">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <label for="validationTooltipUsername3" class="form-label">photo_2</label>
                                        <div class="input-group has-validation">

                                            <input type="file" class="form-control" id="validationTooltipUsername3"
                                                  accept="image/*" name="photo_2">

                                            <div class="invalid-tooltip">
                                                Ajouter photo_2
                                            </div>
                                        </div>


                                        @error('photo_2')
                                            <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <img src=" {{ asset('storage/' . $category->photo_2) }} " width="100px"
                                            alt="photo_2">
                                    </div>
                                </div>

                            </div>


                            <hr>

                            <div class="col-md-6 col-12 position-relative">
                                <label for="validationTooltip06" class="form-label">petite description</label>
                                <textarea id="validationTooltip06" class="form-control"   rows="5" name="petite_description">{{ $category->petite_desc }}</textarea>

                                <div class="invalid-tooltip">
                                    Ajouter une description
                                </div>
                                @error('petite_description')
                                    <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-md-6  col-12 position-relative">
                                <label for="validationTooltip07" class="form-label">grande description</label>
                                <textarea id="validationTooltip07" class="form-control"   rows="10" name="grande_description">{{ $category->grande_desc }}</textarea>

                                <div class="invalid-tooltip">
                                    Ajouter une description
                                </div>
                                @error('grande_description')
                                    <div class="bg-danger text-white d-inline-block p-1 "> {{ $message }} </div>
                                @enderror
                            </div>



                            <div class="col-12">
                                <button class="btn btn-primary" type="submit"> Modifier </button>
                            </div>
                        </form>
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
