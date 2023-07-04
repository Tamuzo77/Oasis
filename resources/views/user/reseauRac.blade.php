<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a2fe60842bf8.38281879/bg1.webp'">
    <x-slot name="headerText">
        <div class="accueil-title mb-4">Lorem ipsum minus .</div>
            <p> {{$page->header ?? ''}} </p>
        
    </x-slot>

    <div class="presentation container text-center mt-4 mb-4">
        <img src="oasis/accueil/logo Oasis Consulting 1 (1).png" alt="" class="col-4">
        <p>
            {{$page->midContent ?? ''}}
        </p>
    </div>
    <livewire:user.reseau-rac :images="$page->imageModels" />
</x-user.layout>