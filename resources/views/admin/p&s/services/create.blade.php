<x-admin.layout title="Create Services">
    <x-admin.header title="Créer un Service" />
    <x-admin.flash />
    <div class="row">
        <div class="col-xl-9 col-md-12 col-12">
            <!-- card -->
            <div class="card mb-5">
                <!-- card body -->
                <div class="card-body">
                    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-admin.form.input name="name" label="nom" :important="true" />
                        <x-admin.form.label name="slug" :important="true" />
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="slug">https://example.com/</span>
                            <input type="text" class="form-control" id="basic-url" name="slug" aria-describedby="slug" placeholder="post-title">
                        </div>
                        <x-admin.form.input name="excerpt" label="Sous-titre" :important="true" />
                        <x-admin.form.textarea name="description" :important="true" />
                        <x-admin.form.input type="file" name="cover_image" label="Image" :important="true" />
                        <div class="mb-4 col-md-6 col-12">
                            <label class="form-label">Statut</label>
                            <select class="form-select" name="status_id">
                                @foreach ($statuses as $status)
                                    <option value="{{ $status->id }} ">{{ $status->libelle }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 mt-12">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <a href="{{ url('admin/partenaires&services') }}" class="btn btn-outline-primary ms-2">Retour</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
