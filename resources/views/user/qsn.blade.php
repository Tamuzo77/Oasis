<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a2fe60842bf8.38281879/bg1.webp'">
    <x-slot name="headerText">
        <div class="accueil-title">Lorem ipsum minus .</div>
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


    <div class="photos mb-4 container">
        <div class="text-center">
            <h2>Photos</h2>
        </div>
        <div class="row justify-content-center mx-sm-5">
            @foreach ($page->imageModels as $image )
            <img class="col-xl-3 col-lg-4 col-sm-6 col-12 mt-4" src="{{ asset("storage/library/$image->image_url") }}"
                alt="">
                
            @endforeach
        </div>
    </div>

    <div class="videos container justify-content-center mt-4 mb-5">
        <div class="text-center mb-5">
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
