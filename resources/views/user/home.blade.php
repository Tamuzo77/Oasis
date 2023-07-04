<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a2fe60842bf8.38281879/bg1.webp'">
    <x-slot name="headerText">
            <div class="accueil-title">Lorem ipsum minus .</div>
            <p> {{$page->header ?? ''}}</p>
    </x-slot>
    {{-- Consulting --}}
    <div class="consulting mt-4 container">
        <div class="title text-center mb-3">OASIS CONSULTING</div>
        <div class="row  align-items-center justify-content-around">
            <div class="logo col-4"><img src="oasis/accueil/logo Oasis Consulting 1.png" alt="" style="height:100%;width:100%"></div>
            <div class="col-8">
                <p>
                    {{$page->midContent ?? ''}}
                </p>
            </div>
        </div>
    </div>

    <livewire:user.formation-slider />
    <livewire:user.actualites />


</x-user.layout>
