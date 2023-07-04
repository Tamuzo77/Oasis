<x-user.layout :title="$formation->name" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a2fe60842bf8.38281879/bg1.webp'">
    <x-slot name="headerText">
        <div class="accueil-title">Lorem ipsum minus .</div>
        <p class="inscrire col-5 text-center">Consulter la formation</p>
    </x-slot>

    <main class="mx-4" data-aos="fade-up" data-aos-duration="3000">
        <div class="mt-5 mb-3">
            <h3>Présentation</h3>
            <div class=" row align-items-center justify-content-center">
                <img class="col-sm-4 mb-sm-none mb-3" src="{{ asset("storage/$formation->cover_image") }}" alt=""
                    style="border-radius:30px;">
                <p class=" col-sm-8">
                    {{ $formation->presentation }}
                </p>
            </div>

        </div>
        <div>
            <h3 class="mt-3 mb-3">Objectifs</h3>
            <p>
                {{ $formation->objectif }}
            </p>
            <h3 class="mt-3 mb-3">Public cible</h3>
            <p>
                {{ $formation->public }}
            </p>
            <h3 class="mt-3 mb-3">Avantages</h3>
            <p>
                {{ $formation->avantage }}
            </p>
            <h3 class="mt-3 mb-3">Modalités de participation</h3>
            <p>
                {{ $formation->modalite }}
            </p>
            <h3 class="mt-3 mb-3">Prochaine session</h3>
            <p>
                {{ $formation->session }}
            </p>
        </div>
    </main>



</x-user.layout>
