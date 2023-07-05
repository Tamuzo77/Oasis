<x-admin.layout title="Enregistrement d'une formation">
    <x-admin.header title="Enregistrement d'une Formation" />
    <x-admin.flash />

    <form action="{{ route('admin.formations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-xl-9 col-md-12 col-12">
                <!-- card -->
                <div class="card mb-5">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- form -->
                        <div class="row">
                            <!-- form group -->
                            <x-admin.form.input label="nom de la formation" name="name" />

                            <div class="mb-4 col-md-6 col-12">
                                <label class="form-label">Date du Début <span class="text-danger">*</span></label>
                                <div class="input-group me-3 " readonly="readonly">
                                    <input class="form-control " value="{{ old('dateDebut') }}" type="date" required name="dateDebut"
                                        placeholder="Select Date" aria-describedby="basic-addon2">
                                  @error('dateDebut')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                            <!-- form group -->
                            <div class="mb-4 col-md-6 col-12">
                                <label class="form-label">Date de Fin <span class="text-danger">*</span></label>
                                <div class="input-group me-3 " readonly="readonly">
                                    <input class="form-control " value="{{ old('dateFin') }}" type="date" required name="dateFin"
                                        placeholder="Select Date" aria-describedby="basic-addon3">
                                        @error('dateFin')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <x-admin.form.textarea required name="presentation" label="Texte Présentatif" />
                            <x-admin.form.textarea required name="objectif" label="Objectifs" />
                            <x-admin.form.textarea required name="public" label="Public Cible" />
                            <x-admin.form.textarea required name="avantage" label="Avantages" />
                            <x-admin.form.textarea required name="modalite" label="Modalités de Participations" />


                            <div class="col-12 mb-4">
                                <h5 class="mb-2">Image de couverture </h5>

                                <div class="fallback d-block dropzone border-dashed min-h-0 rounded-2">

                                    <input value="{{ old('cover_image') ?? '' }}" name="cover_image" type="file"
                                        required>
                                    @error('cover_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                            </div>

                        </div>
                    </div>
                </div>



            </div>
            <div class="col-xl-3">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="mb-0">Catégorie et Prix</h4>
                    </div>
                    <div class="card-body">
                        <label class="form-label">Categories</label>
                        <select name="categoryForm_id" class="form-select">
                            <option value="null" selected disabled>Select Categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="mt-4">
                            <div class="mb-3">
                                <label class="form-label"> Prix de la formation</label>
                                <div class="input-group me-3 " readonly="readonly">

                                    <input type="number" name="price" class="form-control @error($name) is-invalid @enderror" placeholder="_ _ _"
                                        aria-describedby="basic-addon2">
                                    <span class="input-group-text text-muted" id="basic-addon2">FCFA</span>
                                    <x-admin.form.error name="price" />
                                </div>
                            </div>
                        </div>
                        <label class="form-label">Statut</label>
                        <select name="status_id" class="form-select">
                            @foreach ($statuses as $status)
                                <option value="{{ $status->id }}">{{ $status->libelle }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary">
                        Enregistrer la formation
                    </button>
                </div>
            </div>
        </div>
    </form>





</x-admin.layout>
