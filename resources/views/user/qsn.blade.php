<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">
    <x-slot name="headerText">
        <div class="accueil-title">OASIS Consulting</div>
        <p> {{ $page->header ?? '' }}</p>
    </x-slot>

    <livewire:user.service />

    <div class="text-center mt-5 mb-5 p-4 container-fluid" style="background-color: #4684BF; height:auto">
        <div class="container">
            <img src="oasis/accueil/logo Oasis Consulting 2.png" alt="" style="width :35%;height :auto;">
            <div class="mt-4 text-white">
                <p>{{ $page->midContent }}</p>
            </div>
        </div>
    </div>

    <div class="photos mb-5 mx-sm-5 px-5 mt-5">
        <div class="text-center mb-4">
            <h2>Photos</h2>
        </div>
        <div class="caroussel slick-slider drop-shadow-2xl">
            @foreach ($page->imageModels as $image )
            <a target="_top" href="{{ asset("storage/library/$image->image_url") }}">
                <span>voir</span>
                <img src="{{ asset("storage/library/$image->image_url") }}"
                alt="">
            </a>
            @endforeach
        </div>
    </div>

    <div class="videos container justify-content-center mt-5 mb-5">
        <div class="text-center mb-5 mt-4">
            <h2>Vidéos</h2>
        </div>
        <div class="">

            <video width="400" controls>
                <source src="oasis/images/1-carrousel (partie1).mp4" type="video/mp4">

                Your browser does not support HTML5 video.
            </video>
        </div>
    </div>

    <livewire:user.partenaire />

</x-user.layout>
