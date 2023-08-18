<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">
    <x-slot name="headerText">
        <p> {{$page->header}} </p>

    </x-slot>

    <div class="consulting mt-4 container">
        <div class="title text-center mb-3">CV - THEQUE</div>
        <div class="align-items-center justify-content-center text-center">
            <div class="">
                <p>
                    {{$page->midContent ?? ''}}
                </p>
            </div>
        </div>
    </div>
    <livewire:user.cv-theque />

</x-user.layout>
