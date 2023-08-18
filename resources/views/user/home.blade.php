<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">
    <x-slot name="headerText">
            <div class="accueil-title">Bienvenue dans l'univers Oasis</div>
            <p> {{$page->header ?? ''}}</p>
    </x-slot>
    {{-- Consulting --}}
    <div class="consulting mt-4 container">
        <div class="row  align-items-center justify-content-around">
            <div class="logo col-sm-4"><img src="oasis/accueil/logo Oasis Consulting 1.png" alt="" style="height:100%;width:100%"></div>
            <div class="col-sm-8">
                <p>
                    {{$page->midContent ?? ''}}
                </p>
            </div>
        </div>
    </div>

    <livewire:user.formation-slider />
    <livewire:user.actualites />


</x-user.layout>
