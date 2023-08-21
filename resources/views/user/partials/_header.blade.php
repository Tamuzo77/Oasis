@if (Session::has('logged'))
    <div class="justify-items-center text-center pt-3 pb-3 text-white welcome ">
        <h5>Bienvenue {{ auth()->user()->name }}</h5>
    </div>
@endif


<header>
    <div>
        {{-- <x-partials.header></x-partials.header> --}}
        @include('user.partials._navbar')
        {{-- <div class="div-ac-title col-md-8 col-lg-7 text-white opacity-80" style="">
            {{ $headerText ?? false }}
            <x-partials.whatsapp></x-partials.whatsapp>
        </div> --}}
        {{-- <div class="mt-5">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class=" w-100 carousel-item">
                    <img src="oasis/images/mwangi-gatheca-qlKaN7eqay8-unsplash.jpg" alt="">
                </div>
                <div class="w-100 carousel-item">
                    <img src="oasis/images/bruce-barrow-aI9_9T03OIk-unsplash.jpg" alt="">
                </div>
            </div>
        </div>
    </div> --}}
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="oasis/images/bruce-barrow-aI9_9T03OIk-unsplash.jpg" class="d-block w-100" alt="...">
                    <p class="carousel-caption "> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur
                        delectus iste nihil tenetur recusandae doloremque, eos placeat unde deserunt soluta repellendus
                        minima illo fugiat! Qui accusantium dolorum asperiores tempore placeat.</p>
                </div>
                <div class="carousel-item">
                    <img src="oasis/images/mwangi-gatheca-qlKaN7eqay8-unsplash.jpg" class="d-block w-100"
                        alt="...">
                    <p class="carousel-caption"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur
                        delectus iste nihil tenetur recusandae doloremque, eos placeat unde deserunt soluta repellendus
                        minima illo fugiat! Qui accusantium dolorum asperiores tempore placeat.</p>
                </div>
            </div>
        </div>

        <x-partials.whatsapp></x-partials.whatsapp>
    </div>
</header>
