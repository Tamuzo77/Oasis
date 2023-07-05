<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a2fe60842bf8.38281879/bg1.webp'">
    <x-slot name="headerText">
        <div class="accueil-title">OASIS Consulting</div>
        <p> {{$page->header ?? ''}}</p>
    </x-slot>

    <livewire:user.formations :prix="null" />
    
</x-user.layout>