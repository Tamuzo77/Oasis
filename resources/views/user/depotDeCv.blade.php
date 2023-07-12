<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">
    <x-slot name="headerText">
        <div class="accueil-title mb-4">OASIS Consulting</div>
        <p> sit amet consectetur adipisicing elit Numquam magnam eveniet repellendus . optio corporis vel id eaque
            nesciunt voluptatum, aperiam deleniti non tempora necessitatibus tempore </p>

    </x-slot>

    <div class=" justify-items-center text-center pt-3 pb-3 baniere h-auto text-white welcome">
        <p>Offres d'emplois >> Dépôt de CV </p>
    </div>



    <div class="depotCV pt-4 mx-5 pb-5" data-aos="fade-up" data-aos-duration="3000">
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
                    <div class="file-upload w-100">
                        <div class="file-upload-select align-items-center row">
                            <div class="file-select-button col-sm-6"><a
                                    class="btn btn-primary btn-icon-up-file w-100">Add File</a></div>
                            <div class="file-select-name col-sm-6">No file chosen...</div>
                            <input type="file" name="picture" id="file-upload-input">
                        </div>
                    </div>

                </div>
            </div>
            <div class=" mt-4 mb-2 mt-md-4">
                <label for="biographie">Biographie Professionnelle </label><br>
                <textarea name="biography" id="" cols="30" rows="10" class="w-100"></textarea>
            </div>
            <div class="col-md-4 col-sm-6 mt-3 w-100">
                <label for="cv">Importer mon CV</label><br>
                    <div class="file-upload w-100">
                        <div class="file-upload-select1 align-items-center row">
                        <div class="file-select-button col-sm-5 col-md-3" ><a class="btn btn-primary btn-icon-up-file w-100">Add File</a></div>
                        <div class="file-select-name1 col-sm-7 col-md-9">No file chosen...</div>
                        <input type="file" name="cv_path" id="file-upload-input1">
                        </div>
                    </div>
    </div>
    <div class="text-center">
        <button class="inscrire" type="submit">
            Dépôser mon CV
        </button>
    </div>
    </form>

    </div>

</x-user.layout>
