<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">
    <x-slot name="headerText">
        <div class="accueil-title mb-4">OASIS Consulting</div>
            <a href="/depot-de-cv_oasis"><p class="inscrire col-5 text-center">Envoyer mon cv</p></a>
            <a href=""><p class="inscrire col-5 text-center">Espace recruteur</p></a>


    </x-slot>

    <livewire:user.espace-recruteur />


</x-user.layout>
