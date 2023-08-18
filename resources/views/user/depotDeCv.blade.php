<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">
    <x-slot name="headerText">
        <p> {{$page->header ?? ''}}</p>

    </x-slot>

    <div class=" justify-items-center text-center pt-3 pb-3 baniere h-auto text-white welcome">
        <p>Offres d'emplois >> Dépôt de CV </p>
    </div>



    <div class="depotCV pt-4 container pb-5" data-aos="fade-up" data-aos-duration="3000">
        <p class=" mt-4 mb-4">
            {{$page->midContent ?? ''}}
        </p>
        <form action="{{ route('depotDeCv') }}" method="POST" class="pb-5 mt-5" enctype="multipart/form-data">
            @csrf
            <h1 class="text-center">Remplissez ce formulaire</h1>

            <div class="justify-content-center row">
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="name">Nom</label><br>
                    <input class="w-100" type="text" name="lastname" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="name">Prénom</label><br>
                    <input class="w-100" type="text" name="firstname" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="email">Email</label><br>
                    <input class="w-100" type="email" name="email" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="tel">Téléphone</label><br>
                    <input class="w-100" type="tel" name="phone" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="age">Age</label><br>
                    <input class="w-100" type="number" name="age" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="cv">Importer ma photo d'identité</label><br>
                    <input class="w-100" type="file" name="" id="">

                </div>
            </div>
            <div class=" mt-4 mb-2 mt-md-4">
                <label for="biographie">Biographie Professionnelle </label><br>
                <textarea name="biography" id="" cols="30" rows="10" class="w-100"></textarea>
            </div>
            <div class="col-md-4 col-sm-6 mt-3">
                <label for="cv">Importer mon CV</label><br>
                <input class="w-100" type="file" name="" id="">
    </div>
    <div class="text-center mt-5">
        <button class="inscrire" type="submit">
            Dépôser mon CV
        </button>
    </div>
    </form>

    </div>

</x-user.layout>
