<form action="{{ route('emploiCreate') }}" method="POST" class=" mt-5" enctype="multipart/form-data">
    @csrf
    <h1 class="text-center">Remplissez ce formulaire</h1>

    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6 mt-3">
            <label for="name">Nom de la structure</label><br>
            <input class="w-100" type="text" wire:model="structure.name" required name="structure.name"
                id="">
            <x-input-error :messages="$errors->get('structure.name')" class="mt-2" />

        </div>
        <div class="col-md-4 col-sm-6 mt-3">
            <label for="email">Email</label><br>
            <input class="w-100" type="email" wire:model="structure.email" required name="structure.email"
                id="">
            <x-input-error :messages="$errors->get('structure.email')" class="mt-2" />

        </div>
        <div class="col-md-4 col-sm-6 mt-3">
            <label for="name">Téléphone</label><br>
            <input class="w-100" type="tel" required wire:model="structure.tel" name="structure.tel"
                id="">
            <x-input-error :messages="$errors->get('structure.tel')" class="mt-2" />

        </div>
        <div class="col-md-6 col-sm-6 mt-3">
            <label for="name">Numéro IFU</label><br>
            <input class="w-100" type="number" required wire:model="structure.ifu" name="structure.ifu"
                id="">
            <x-input-error :messages="$errors->get('structure.ifu')" class="mt-2" />

        </div>

        <div class="col-md-6 col-sm-6 mt-5 justify-content-center">
            <div class="file-upload w-100">
                <div class="file-upload-select align-items-center row">
                    <div class="file-select-button col-sm-6"><a class="btn btn-primary btn-icon-up-file w-100">Ajouter le logo de votre Entreprise
                            </a></div>
                    <div class="file-select-name col-sm-6">Aucun fichier choisi</div>
                    <input type="file" wire:model="structure.logo" name="structure.logo" id="file-upload-input">
                </div>
            </div>
            <x-input-error :messages="$errors->get('structure.logo')" class="mt-2" />

        </div>
        <div class="col-md-4 col-sm-6 mt-3">
            <label for="name">Lien Facebook</label><br>
            <input class="w-100" type="url" wire:model="structure.lien_facebook" name="structure.lien_facebook"
                id="">
            <x-input-error :messages="$errors->get('structure.lien_facebook')" class="mt-2" />

        </div>
        <div class="col-md-4 col-sm-6 mt-3">
            <label for="name">Lien Likedin</label><br>
            <input class="w-100" type="url" wire:model="structure.lien_linkedin" name="structure.lien_linkedin"
                id="">
            <x-input-error :messages="$errors->get('structure.lien_linkedin')" class="mt-2" />

        </div>
        <div class="col-md-4 col-sm-6 mt-3">
            <label for="name">Lien Github</label><br>
            <input class="w-100" type="url" wire:model="structure.lien_github" name="structure.lien_github"
                id="">
            <x-input-error :messages="$errors->get('structure.lien_github')" class="mt-2" />

        </div>

        <div class="col-md-6 col-sm-6 mt-3">
            <label for="poste">Libellé du Poste</label><br>
            <input class="w-100" type="text" required name="libelle" id="">
            <x-input-error :messages="$errors->get('libelle')" class="mt-2" />

        </div>
        <div class=" col-sm-6 mt-3">
            <label for="ville">Ville</label><br>
            <select class="ville w-100" style="" name="ville_id" id="">
                @forelse (\App\Models\Ville::all() as $ville)
                    <option value="{{ $ville->id }} ">{{ $ville->name }}</option>
                @empty
                    <option disabled>Aucune Ville trouvé</option>
                @endforelse
            </select>
        </div>
        <div class=" col-sm-6 mt-3">
            <label for="description">Description du poste</label><br>
            <textarea class="w-100" required name="description" id="" cols="30" rows="10"></textarea>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="inscrire">
            Enregistrer
        </button>
    </div>
</form>
