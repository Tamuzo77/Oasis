<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">
    <x-slot name="headerText">
        <div class="accueil-title">OASIS Consulting</div>
        <p> {{$page->header ?? ''}}</p>
    </x-slot>

    <livewire:user.formations />
    
</x-user.layout>