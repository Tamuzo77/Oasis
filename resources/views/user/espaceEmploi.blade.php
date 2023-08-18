<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">

    <x-slot name="headerText">
            <p> {{$page->header ?? ''}}</p>
    </x-slot>

    <div class="depotCV pt-4 mx-5 pb-3" data-aos="fade-up" data-aos-duration="3000">
        <livewire:user.espace-emploi />
    </div>



</x-user.layout>
