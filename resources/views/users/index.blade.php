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
        background-image:url('oasis/accueil/Rectangle 2 (1).png');
    }
    .card-1{
        border: none !important;
        background: none !important;
    }
    .card-footer{
        background: none !important;
        border: none !important;
    }

</style>

<body>

    <header class="nav-bar">
        <x-partials.header></x-partials.header>
        <div class="div-ac-title col-md-5 text-white opacity-80" style="">
            <div class="accueil-title mb-4">Lorem ipsum  minus .</div>
            <p> sit amet consectetur adipisicing elit  Numquam magnam eveniet repellendus . optio corporis vel id eaque nesciunt voluptatum, aperiam deleniti non tempora necessitatibus tempore </p>
        </div>
    </header>
    <div class="consulting mt-4 container">
        <div class="title text-center ">OASIS CONSULTING</div>
        <div class="row  align-items-center justify-content-around">
            <div class="logo col-4"><img src="oasis/accueil/logo Oasis Consulting 1.png" alt="" style="height:100%;width:100%"></div>
            <div class="col-8">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores facilis doloremque doloribus odit saepe
                    assumenda, asperiores non? Non, odio reiciendis doloribus modi, dolorem eum, totam illum est alias dolore laborum.
                </p>
            </div>
        </div>
    </div>

    <div class="carroussel container-fluid text-center py-3 text-white" style="background-color: #4684BF; height:auto">
        <div class="mb-5">
            <h2 >Souscrivez à nos formations</h2>
        </div>




        <div class="container text-center my-3">
            <div class="row mx-auto justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4 col-sm-6 mx-3">
                                <div class="card card-1">
                                    <div class="card-img card-img-1">
                                        <img src="oasis/images/bruce-barrow-aI9_9T03OIk-unsplash.jpg" class="img-fluid">
                                    </div>
                                    <div class="mt-2 card-footer">Slide 56</div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4 mx-3 col-sm-6">
                                <div class="card card-1">
                                    <div class="card-img card-img-1">
                                        <img src="oasis/images/mwangi-gatheca-qlKaN7eqay8-unsplash.jpg" class="img-fluid">
                                    </div>
                                    <div class="mt-2 card-footer">Slide 56</div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4 mx-3 col-sm-6">
                                <div class="card card-1">
                                    <div class="card-img card-img-1">
                                        <img src="oasis/images/charlesdeluvio-97Ir6ym25N4-unsplash.jpg" class="img-fluid">
                                    </div>
                                    <div class="mt-2 card-footer">Slide 56dgdsgdgdgfvbcvbcbcvbvcbvcccccccccccccccccccbfgfghfhfhffgfgfg</div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4 mx-3 col-sm-6">
                                <div class="card card-1">
                                    <div class="card-img card-img-1">
                                        <img src="oasis/images/bruce-barrow-aI9_9T03OIk-unsplash.jpg" class="img-fluid">
                                    </div>
                                    <div class="mt-2 card-footer">Slide 56</div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4 mx-3 col-sm-6">
                                <div class="card card-1">
                                    <div class="card-img card-img-1">
                                        <img src="oasis/images/charlesdeluvio-97Ir6ym25N4-unsplash.jpg" class="img-fluid">
                                    </div>
                                    <div class="mt-2 card-footer">Slide 56</div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4 mx-3 col-sm-6">
                                <div class="card card-1">
                                    <div class="card-img card-img-1">
                                        <img src="images/bruce-barrow-aI9_9T03OIk-unsplash.jpg" class="img-fluid">
                                    </div>
                                    <div class="mt-2 card-footer">Slide 56</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color :#4684BF;border-radius: 50%;padding:20px"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" style="background-color :#4684BF;border-radius: 50%;padding:20px"></span>
                    </a>
                </div>
            </div>

        </div>

    </div>

    <div class="news my-5 container align-items-center">
        <div class="title text-center mb-3">Nos actualités</div>
        <div class=" card-container row">
            <div class="card card-2 text-center col-md-6 mb-4">
                <img class="card-img-top" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.14 (1).jpeg" alt="">
                <div class="card-body card-body-2">
                  <h4 class="card-title">Title news</h4>
                  <p class="card-text ">llitia distinctio autem?</p>

                </div>
                <a href="#" class="button">Lire</a>
              </div>

              <div class="card card-2 text-center col-sm-6 mb-4">
                <img class="card-img-top" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.14 (1).jpeg" alt="">
                <div class="card-body card-body-2">
                  <h4 class="card-title">Title news</h4>
                  <p class="card-text">Lorem ipsum dolor sit pe officia aliquid quas dicta mollitia distinctio autem?</p>

                </div>
                <a href="#" class="button">Lire</a>
              </div>
              <div class="card card-2 text-center col-sm-6 mb-4">
                <img class="card-img-top" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.14 (1).jpeg" alt="">
                <div class="card-body card-body-2">
                  <h4 class="card-title">Title news</h4>
                  <p class="card-text">Lorem ipsum dolor sit pe officia aliquid quas dicta mollitia distinctio autem?</p>

                </div>
                <a href="#" class="button">Lire</a>
              </div>
              <div class="card card-2 text-center col-sm-6 col-mb-4">
                <img class="card-img-top" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.14 (1).jpeg" alt="">
                <div class="card-body card-body-2">
                  <h4 class="card-title">Title news</h4>
                  <p class="card-text">Lorem ipsum dolor sit pe officia aliquid quas dicta mollitia distinctio autem?</p>

                </div>
                <a href="#" class="button">Lire</a>
              </div>
              <div class="card card-2 text-center col-sm-6 mb-4">
                <img class="card-img-top" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.14 (1).jpeg" alt="">
                <div class="card-body card-body-2">
                  <h4 class="card-title">Title news</h4>
                  <p class="card-text">Lorem ipsum dolor sit pe officia aliquid quas dicta mollitia distinctio autem?</p>

                </div>
                <a href="#" class="button">Lire</a>
              </div>

        </div>



    </div>

    <footer>
        <x-partials.footer></x-partials.footer>
    </footer>

    <script src="{{asset('js/script.js')}}"></script>

 {{-- @include('partials._footer') --}}
</body>
</html>
