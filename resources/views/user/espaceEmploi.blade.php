<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">

    <div class="depotCV pt-4 mx-5 pb-3" data-aos="fade-up" data-aos-duration="3000">
        <form action="{{ route('emploiCreate') }}" method="POST" class=" mt-5">
            @csrf
            <h1 class="text-center">Remplissez ce formulaire</h1>

            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="name">Nom de la structure</label><br>
                    <input class="w-100" type="text" name="structure_name" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="email">Email</label><br>
                    <input class="w-100" type="email" name="structure_email" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="name">Téléphone</label><br>
                    <input class="w-100" type="tel" name="structure_tel" id="">
                </div>
                <div class="col-md-6 col-sm-6 mt-3">
                    <label for="name">Numéro IFU</label><br>
                    <input class="w-100" type="number" name="structure_ifu" id="">
                </div>

                <div class="box col-md-6 col-sm-6 mt-3 justify-content-center">
                    <input style="display: none;" type="file" name="structure_logo" id="file-7"
                        class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
                    <label class="w-100 text-center bold text-white" for="file-7"><span></span><strong
                            class="w-100"><svg style="color: white !important" xmlns="http://www.w3.org/2000/svg"
                                width="20" height="17" viewBox="0 0 20 17">
                                <path
                                    d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                                </path>
                            </svg> Importer le logo de l'entreprise&hellip;</strong></label>
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="name">Lien Facebook</label><br>
                    <input class="w-100" type="text" name="structure_lien_facebook" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="name">Lien Likedin</label><br>
                    <input class="w-100" type="text" name="structure_lien_linkedin" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="name">Lien Github</label><br>
                    <input class="w-100" type="text" name="structure_lien_github" id="">
                </div>

                <div class="col-md-6 col-sm-6 mt-3">
                    <label for="poste">Libellé du Poste</label><br>
                    <input class="w-100" type="text" name="libelle" id="">
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
                    <label for="desciption">Description du poste</label><br>
                    <textarea class="w-100" name="description" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="inscrire">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>



</x-user.layout>
