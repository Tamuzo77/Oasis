<x-admin.layout :title="$page->title">
    <x-admin.header title="OASIS : Page {{ $page->title }}"
        subtitle="Modifier ici le contenu textuel et les images vivsibles sur la page dans l'espace réservé aux utilisateurs" />
    <x-admin.flash />

    <form action="{{ url("/admin/pages-update$page->href") }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">

            <div class="col-xl-9 col-md-12 col-12">
                <!-- card -->
                <div class="card mb-5">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- form -->
                        <div class="row">

                            <x-admin.form.input :important="true" label="Titre" name="title" value="{{ $page->title }}" />
                            <x-admin.form.textarea  name="header" label="Texte Présentatif">
                                {{ $page->header }}
                            </x-admin.form.textarea>
                            <x-admin.form.textarea  name="midContent" label="Texte Descriptif">
                                {{ $page->midContent }}
                            </x-admin.form.textarea>

                            <div class="">
                                <x-admin.form.label name="Selectionnez une image" />
                                <div class="image-select-grid">
                                    @foreach ($images as $image)
                                        <label>
                                            <input {{ $page->imageModels->contains($image->id) ? 'checked' : ''  }} type="checkbox" name="images[]" value="{{ $image->id }}"
                                                onchange="updateImagePreview('')">
                                            <img src="{{ asset("storage/library/$image->image_url") }}"
                                                alt="{{ $image->name }}">
                                        </label>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
            <div class="col-xl-3">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="mb-0">Supplémentaires</h4>
                    </div>
                    <div class="card-body">
                        <label class="form-label">Page Parent</label>
                        <select name="parent_id" class="form-select mb-3">
                            <option value={{ null }}>None</option>
                            @foreach ($pages as $pageParent )
                                <option value="{{ $pageParent->id }}" {{ ($pageParent->id == $page->parentPage?->id) ? 'selected' : '' }}>{{ $pageParent->title }}</option>
                            @endforeach

                        </select>
                        <x-admin.form.input :important="true" label="Lien" value="{{ $page->href }}" disabled  name="href" />
                        <x-admin.form.input :important="true" label="Vue" value="{{ $page->view }}"  name="view" />
                        
                    </div>

                </div>

                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary">
                        Enregistrer les modifications
                    </button>
                </div>
            </div>
        </div>
    </form>

    <style>
        .image-select-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .image-select-grid label {
            position: relative;
            width: 80px;
            height: 80px;
            margin: 10px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .image-select-grid img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-select-grid input[type="checkbox"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .image-select-grid label::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .image-select-grid label:hover::before {
            opacity: 1;
        }

        .image-select-grid input[type="checkbox"]:checked+img {
            border: 2px solid #1e90ff;
        }

        .image-select-grid input[type="checkbox"]:checked+label::before {
            opacity: 1;
        }
    </style>

</x-admin.layout>
