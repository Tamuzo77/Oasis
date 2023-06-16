<x-admin.layout title="Partenaires & Services">
    <x-admin.header title="Services & Partenaires" />
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services & Partenaires</li>
        </ol>
    </nav>
    <x-admin.flash />

    <livewire:admin.services.index />
    <livewire:admin.partenaires.index />


    <div class="modal fade" id="partenaireModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true"   style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        Ajouter un Partenaire</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="{{ route('admin.partenaire-store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="modal-body">
                     <x-admin.form.input name="nom" :important="true" placeholder="Entrer le nom de l'Entreprise ou du Partenaire" />
                     <x-admin.form.input name="logo" type="file" />
                     <x-admin.form.input name="url" />
                  </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-admin.layout>
