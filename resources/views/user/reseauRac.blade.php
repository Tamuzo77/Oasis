<x-user.layout :title="$page->title">
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