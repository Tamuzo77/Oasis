<x-user.layout :title="$page->title">
    <x-slot name="headerText">
            <div class="accueil-title">Lorem ipsum minus .</div>
            <p> {{$page->header}}</p>
    </x-slot>
    {{-- Consulting --}}
    <div class="consulting mt-4 container">
        <div class="title text-center mb-3">OASIS CONSULTING</div>
        <div class="row  align-items-center justify-content-around">
            <div class="logo col-4"><img src="oasis/accueil/logo Oasis Consulting 1.png" alt="" style="height:100%;width:100%"></div>
            <div class="col-8">
                <p>{{$page->midContent}}
                </p>
            </div>
        </div>
    </div>
    @if (request()->is('/') || request()->is('home'))
    <livewire:user.formation-slider />
    <livewire:user.actualites />
    @endif




</x-user.layout>