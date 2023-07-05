<x-admin.layout title="Créer une Actualité">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="mb-5">
                <h3 class="mb-0 ">Créer une nouvelle Actualité</h3>

            </div>
        </div>
        <div>
            <x-admin.flash />
            <!-- row -->
            <div class="row">
                <div class="col-xl-9 col-md-12 col-12">
                    <!-- card -->
                    <div class="card mb-5">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- form -->
                            <form id="my-form" action="{{ route('admin.boutiques.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- form group -->
                                    <div class="mb-3 col-12">
                                        <x-admin.form.input name="title" label="titre" :important="true" required />
                                    </div>
                                    <!-- form group -->
                                    <x-admin.form.textarea label="Description" name="description" required />

                                    <!-- form group -->
                                    <div class="mb-4 col-md-6 col-12">
                                        <label class="form-label">Types
                                        </label>
                                        <select class="form-select" name="product_type_id">
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <!-- form group -->
                                    <div class="mb-4 col-md-6 col-12">
                                        <label class="form-label">Statut</label>
                                        <select class="form-select" name="is_available">
                                            <option value="{{ true }}">Disponible</option>
                                            <option value="{{ false }}">Indisponible</option>
                                        </select>
                                    </div>



                                    <div class="col-12 mb-4">
                                        <x-admin.form.label name="image de couverture" />
                                        <input type="file" required id="image" name="image">

                                    </div>
                                    <x-admin.form.input type="number" id="" name="price"
                                        label="montant en FCFA" />
                                    <div class="col-md-8"></div>
                                    {{--<div class="card mb-5 mt-5 ">
                                        <div class="card-body">
                                            <div>

                                                <div>
                                                    <!-- heading -->
                                                    <h3 class="mb-1">Galerie du produit (optionel)</h3>
                                                    <x-admin.form.label name="Ajouter des images supplémentaires" />
                                                    <input type="file" multiple id="imagesSup" name="image_products">
                                                </div>
                                            </div>
                                        </div>
                                    </div>--}}
                                    <!-- button -->
                                    <div class="col-12 d-flex justify-content-end">
                                        <button class="btn btn-primary" type="submit"
                                            onclick="submitForm()">Submit</button>
                                        <button type="button" class="btn btn-outline-primary ms-2"
                                            data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Register any plugins
                FilePond.registerPlugin(FilePondPluginImagePreview);

                // Create FilePond object
                const inputElement1 = document.querySelector('input[id="image"]');
                const pond = FilePond.create(inputElement1);

                const inputElement2 = document.querySelector('input[id="imagesSup"]');
                const pond2 = FilePond.create(inputElement2);

                FilePond.setOptions({
                    server: {
                        process: '/admin/tmp-upload',
                        revert: '/admin/tmp-delete',
                        restore: './restore/',
                        load: './load/',
                        fetch: './fetch/',
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        }
                    },
                });
            });

            // Get a reference to the file input element

            // Create a FilePond instance
        </script>
</x-admin.layout>
