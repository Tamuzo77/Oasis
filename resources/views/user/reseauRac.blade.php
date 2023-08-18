<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">
    <x-slot name="headerText">
            <p> {{$page->header ?? ''}} </p>

    </x-slot>

    <div class="presentation mx-4 mt-5 mb-4 mx-lg-5 row align-items-center">
        <img src="oasis/accueil/logo Oasis Consulting 1 (1).png" alt="" class="col-sm-5 col-lg-4 m-auto m-sm-0">
        <p class="col-sm-7">
            {{$page->midContent ?? ''}}
        </p>
    </div>
    <livewire:user.reseau-rac :images="$page->imageModels" />
    <div class="text-center">
        <a class="inscrire" href="/contact">Contactez un personnel</a>
    </div>
</x-user.layout>
