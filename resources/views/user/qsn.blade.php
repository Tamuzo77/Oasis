<x-user.layout :title="$page->title">
    <x-slot name="headerText">
        <div class="accueil-title">Lorem ipsum minus .</div>
        <p> {{$page->header ?? ''}}</p>
    </x-slot>

    
</x-user.layout>