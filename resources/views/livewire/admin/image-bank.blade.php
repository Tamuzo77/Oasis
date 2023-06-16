<div>
    <h2>Banque d'images</h2>
    <form action="{{ route('admin.image-store') }}" method="post">
        @csrf
        <div class="col-12 mb-4">
            <x-admin.form.input name="libelle" :important="true" />
            <h5 class="mb-2">Image </h5>
            <input value="{{ old('image') }}" name="image" type="file" required>

            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-12 mb-8 ">
            <button class="btn btn-primary" type="submit">Enregistrer</button>
        </div>
    </form>

    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />

    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);

        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type="file"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement);

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
    </script>





    <!-- Grille d'images -->
    <div class="image-grid">
        @if ($images->count() == 0)
            <div class="empty-state">
                <h3>Aucune image trouvé</h3>
                <p>Aucun image n'est disponible pour le moment.</p>
            </div>
        @endif
        <div class="container">
            <div class="row">
                @foreach ($images as $image)
                    <div class="col-lg-4 col-md-6">
                        <div class="image-item">
                            <img src="{{ asset("storage/library/$image->image_url") }}" alt="{{ $image->name }}"
                                class="img-fluid">
                            <div class="image-overlay">
                                <a href="{{ asset("storage/library/$image->image_url") }}" class="image-link">Voir</a>
                                <button onclick="confirmationDelete()" wire:click="deleteImage({{ $image->id }})" 
                                    class="btn btn-danger btn-delete">Supprimer</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </div>
</div>

<script>
    function confirmationDelete() {
        
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
</script>

<style>
    .image-item {
        position: relative;
        overflow: hidden;
    }

    .image-item img {
        width: 100%;
        height: auto;
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .image-overlay:hover {
        opacity: 1;
    }

    .image-link,
    .btn-delete {
        color: #fff;
        margin: 10px;
    }

    @media (max-width: 767px) {
        .image-item {
            margin-bottom: 20px;
        }
    }



    .empty-state {
        text-align: center;
        padding: 20px;
        background-color: #f7f7f7;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .empty-state h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .empty-state p {
        font-size: 16px;
        color: #888;
    }
</style>
