<div class="carroussel container-fluid text-center py-3 text-white" style="background-color: #4684BF; height:auto">
    <div class="mb-5">
        <h2>Souscrivez à nos formations</h2>
    </div>




    <div class="container text-center my-3">
        <div class="row mx-auto justify-content-center">
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    @forelse ($formations as $formation )
                    <div class="carousel-item @if($loop->iteration < 2) active @endif">
                        <div class="col-md-4 col-sm-6 mx-3">
                            <div class="card card-1">
                                <div class="card-img card-img-1">
                                    <img src="{{ asset("storage/$formation->cover_image") }}" class="img-fluid">
                                </div>
                                <div class="mt-2 card-footer">{{ $formation->name }}</div>
                            </div>

                        </div>
                    </div>
                    @empty
                        <x-partials.vide />

                    @endforelse
                    
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"
                        style="background-color :#4684BF;border-radius: 50%;padding:20px"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"
                        style="background-color :#4684BF;border-radius: 50%;padding:20px"></span>
                </a>
            </div>
        </div>

    </div>

</div>

<style>
    .card-1 {
        border: none !important;
        background: none !important;
    }

    .card-footer {
        background: none !important;
        border: none !important;
    }
</style>
