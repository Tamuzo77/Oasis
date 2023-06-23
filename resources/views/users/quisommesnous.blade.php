<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css" integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw==" crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>

<style>

 .nav-bar{
        height: 500px;
        background-image:url('oasis/accueil/Rectangle 2 (1).png');
        background-size:cover;
        object-fit: cover;
        background-repeat: no-repeat;
        background-position: center;

    }


</style>

<body>

    <header class="nav-bar">
        <x-partials.header></x-partials.header>
        <div class="div-ac-title col-md-5 text-white opacity-80" style="">
            <div class="accueil-title">Lorem ipsum  minus .</div>
            <p> sit amet consectetur adipisicing elit  Numquam magnam eveniet repellendus . optio corporis vel id eaque nesciunt voluptatum, aperiam deleniti non tempora necessitatibus tempore </p>
        </div>
    </header>
    <div class="consulting mt-4 me-3 ms-3">
        <div class="title text-center mb-5">Consultez nos services</div>
        <div class="d-flex container align-items-center">
            <div class="link-formation">
                <div class="forme">
                    <p>Formations</p>
                    <div>
                        <p class="absolute">formation</p>
                        <img class="relative" src="oasis/accueil/formation.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="text-center mt-5 mb-5 p-4 container-fluid" style="background-color: #4684BF; height:auto">
        <div class="container">
            <img src="oasis/accueil/logo Oasis Consulting 2.png" alt="" style="width :290px;height :155px;">
            <div class="mt-4 text-white"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime doloribus consequuntur id, nostrum aliquid reiciendis adipisci esse exercitationem et vero ducimus minus facere magni odio porro fuga voluptates, at cupiditate.</p></div>
        </div>
    </div>


        <div class="photos mb-4 container mx-sm-5">
            <div class="text-center"><h2>Photos</h2></div>
            <div class="row justify-content-center">
                <img class="col-lg-4 col-sm-6 col-12 mt-4" src="oasis/images/bruce-barrow-aI9_9T03OIk-unsplash.jpg" alt="">
                <img class="col-lg-4 col-sm-6 col-12 mt-4" src="oasis/images/mwangi-gatheca-qlKaN7eqay8-unsplash.jpg" alt="">
                <img class="col-lg-4 col-sm-6 col-12 mt-4" src="oasis/images/charlesdeluvio-97Ir6ym25N4-unsplash.jpg" alt="">
                <img class="col-lg-4 col-sm-6 col-12 mt-4" src="oasis/images/mwangi-gatheca-qlKaN7eqay8-unsplash.jpg" alt="">
                <img class="col-lg-4 col-sm-6 col-12 mt-4" src="oasis/images/bruce-barrow-aI9_9T03OIk-unsplash.jpg" alt="">
            </div>
        </div>

    <div class="videos container justify-content-center mt-4 mb-5">
        <div class="text-center mb-5"><h2>Vidéos</h2></div>
        <div class="">

            <video width="400" controls>
                <source src="oasis/images/1-carrousel (partie1).mp4" type="video/mp4">

                Your browser does not support HTML5 video.
            </video>
        </div>
    </div>
    <div class="partenaires container mb-5">
        <div class="row justify-content-center">
            <img class="col-lg-2 col-sm-3 col-6 mt-4" src="oasis/images/mwangi-gatheca-qlKaN7eqay8-unsplash.jpg" alt="">
            <img class="col-lg-2 col-sm-3 col-6 mt-4" src="oasis/images/mwangi-gatheca-qlKaN7eqay8-unsplash.jpg" alt="">
            <img class="col-lg-2 col-sm-3 col-6 mt-4" src="oasis/images/mwangi-gatheca-qlKaN7eqay8-unsplash.jpg" alt="">
            <img class="col-lg-2 col-sm-3 col-6 mt-4" src="oasis/images/mwangi-gatheca-qlKaN7eqay8-unsplash.jpg" alt="">
            <img class="col-lg-2 col-sm-3 col-6 mt-4" src="oasis/images/mwangi-gatheca-qlKaN7eqay8-unsplash.jpg" alt="">

        </div>
    </div>

<footer>
    <x-partials.footer></x-partials.footer>
</footer>

<script src="{{asset('js/script.js')}}"></script>

{{-- @include('partials._footer') --}}
</body>
</html>
