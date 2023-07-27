<form action="{{ route('emploiCreate') }}" method="POST" class=" mt-5" enctype="multipart/form-data">
    @csrf
    <h1 class="text-center">Remplissez ce formulaire</h1>

    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6 mt-3">
            <label for="name">Nom de la structure</label><br>
            <input class="w-100" type="text" wire:model="structure.name" required name="structure.name" id="">
            <x-input-error :messages="$errors->get('structure.name')" class="mt-2" />

        </div>
        <div class="col-md-4 col-sm-6 mt-3">
            <label for="email">Email</label><br>
            <input class="w-100" type="email" wire:model="structure.email" required name="structure.email" id="">
            <x-input-error :messages="$errors->get('structure.email')" class="mt-2" />

        </div>
        <div class="col-md-4 col-sm-6 mt-3">
            <label for="name">Téléphone</label><br>
            <input class="w-100" type="tel" required wire:model="structure.tel" name="structure.tel" id="">
            <x-input-error :messages="$errors->get('structure.tel')" class="mt-2" />

        </div>
        <div class="col-md-6 col-sm-6 mt-3">
            <label for="name">Numéro IFU</label><br>
            <input class="w-100" type="number" required wire:model="structure.ifu" name="structure.ifu" id="">
            <x-input-error :messages="$errors->get('structure.ifu')" class="mt-2" />

        </div>

        <div class="box col-md-6 col-sm-6 mt-3 justify-content-center">
            <input style="display: none;" type="file" wire:model="structure.logo" name="structure.logo" required
                id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
            <x-input-error :messages="$errors->get('structure.logo')" class="mt-2" />

            <label class="w-100 text-center bold text-white" for="file-7"><span></span><strong class="w-100"><svg
                        style="color: white !important" xmlns="http://www.w3.org/2000/svg" width="20" height="17"
                        viewBox="0 0 20 17">
                        <path
                            d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                        </path>
                    </svg> Importer le logo de l'entreprise&hellip;</strong></label>
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
