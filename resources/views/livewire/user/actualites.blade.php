<div class="news my-5 container align-items-center">
    <div class="title text-center mb-3">Nos actualités</div>
    <div class=" card-container row overflow-auto flex-nowrap p-3 justify-content-center mb-4">
        @forelse ($actus as $actu )
        <div class="card card-2">
            <img class="card-img-top" src="{{ asset("storage/$actu->cover_image") }}"
                alt="">
            <div class="card-body card-body-2">
                <h4 class="card-title">{{ $actu->title }}</h4>
                <p class="card-text ">{!! $actu->content !!} </p>

            </div>
            <a href="{{ url("/actus/$actu->slug") }}" class="button text-center">Lire</a>
        </div>
        @empty
            <x-partials.vide />
        @endforelse

    </div>



</div>

<style>
    .ql-hidden {
        visibility: hidden;
        position: absolute;
    }

    .custom-image {
        width: 100%;
        height: auto;
        max-height: 150px;
        /* Spécifiez ici la hauteur maximale souhaitée */
        object-fit: cover;
    }
</style>
