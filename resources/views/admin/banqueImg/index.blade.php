<x-admin.layout title="Banque d'Images">
    <x-admin.header title="OASIS Galerie"
                    subtitle="Ici est répertorié toutes les images disponibles sur la plateforme OASIS pour toutes vos actions liées" />

    <x-admin.flash />


    <h2>Banque d'images</h2>
    <form action="{{ route('admin.image-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-12 mb-4">
            <x-admin.form.input name="libelle" :important="true" />
            <h5 class="mb-2">Image </h5>
            <input name="image" type="file" />
        </div>
        <div class="col-12 mb-8 ">
            <button class="btn btn-primary" type="submit">Enregistrer</button>
        </div>
    </form>
    <link
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"
/>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Register any plugins
    FilePond.registerPlugin(FilePondPluginImagePreview);

    // Create FilePond object
    const inputElement = document.querySelector('input[type="file"]');
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
  });

        // Get a reference to the file input element

        // Create a FilePond instance

    </script>
    <livewire:admin.image-bank />
</x-admin.layout>