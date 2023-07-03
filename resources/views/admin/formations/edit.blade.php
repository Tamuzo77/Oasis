<x-admin.layout title="Enregistrement d'une formation">
    <x-admin.header title="Enregistrement d'une Formation" />
    <x-admin.flash />

    <form action="{{ route('admin.formations.update', $formation->slug) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row">

            <div class="col-xl-9 col-md-12 col-12">
                <!-- card -->
                <div class="card mb-5">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- form -->
                        <div class="row">
                            <!-- form group -->
                            <x-admin.form.input value="{{ $formation->name }}" :important="true" label="nom de la formation" name="name" />

                            <div class="mb-4 col-md-6 col-12">
                                <label class="form-label">Date du Début <span class="text-danger">*</span></label>
                                <div class="input-group me-3 " readonly="readonly">
                                    <input class="form-control " value="{{ old('dateDebut') ?? $formation->dateDebut }}" type="date" required name="dateDebut"
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
                                    <input class="form-control " value="{{ old('dateFin')  }}" type="date" required name="dateFin"
                                        placeholder="Select Date" aria-describedby="basic-addon3">
                                        @error('dateFin')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <x-admin.form.textarea required :important="true" name="presentation" label="Texte Présentatif">{{ $formation->presentation }}</x-admin.form.textarea>
                            <x-admin.form.textarea required :important="true" name="objectif" label="Objectifs">{{ $formation->objectif }}</x-admin.form.textarea>
                            <x-admin.form.textarea required :important="true" name="public" label="Public Cible">{{ $formation->public }}</x-admin.form.textarea>
                            <x-admin.form.textarea required :important="true" name="avantage" label="Avantages">{{ $formation->avantage }}</x-admin.form.textarea>
                            <x-admin.form.textarea required :important="true" name="modalite" label="Modalités de Participations">{{ $formation->modalite }}</x-admin.form.textarea>


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

                                    <input type="number" value="{{ $formation->price }}" class="form-control" placeholder=" 4900"
                                        aria-describedby="basic-addon2">
                                    <span class="input-group-text text-muted" id="basic-addon2">FCFA</span>

                                </div>
                            </div>
                        </div>
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
