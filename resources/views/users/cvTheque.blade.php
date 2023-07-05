<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css"
        integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css"
        integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>

<style>
    .nav-bar {
        background-image: url('oasis/accueil/Rectangle 2 (1).png');
    }

    .card-1 {
        border: none !important;
        background: none !important;
    }

    .card-footer {
        background: none !important;
        border: none !important;
    }
</style>

<body>

    <header class="nav-bar">
        <x-partials.header></x-partials.header>
        <div class="div-ac-title col-md-5 text-white opacity-80" style="">
            <div class="accueil-title mb-4">Lorem ipsum minus .</div>
            <p> sit amet consectetur adipisicing elit Numquam magnam eveniet repellendus . optio corporis vel id eaque
                nesciunt voluptatum, aperiam deleniti non tempora necessitatibus tempore </p>
                <x-partials.whatsapp></x-partials.whatsapp>
        </div>
    </header>
        {{-- <main class="">
            <div class="row justify-content-center mx-4">

                <div class="row col-md-5 align-items-center shadow mx-2 mt-4 col-12 p-3">
                    <img class="col-sm-5 col-10 m-auto rounded-circle" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
                    <div class="col-sm-7">
                        <h4>AHOUISSOU Bai <small><i style="color :rgba(0, 0, 0, 0.538)">Posted on February 19, 2016</i></h4>
                        <strong>(baiahouissou@gmail.com)</strong>
                        <p class="mt-1">Lorem ipsum dolor dignissimos similique eligendi fuga ipsam unde numquam sunt debitis, illo ipsum excepturi quos. Ab, corporis voluptas!</p>
                        <a href="" class="inscrire mt-3">Télécharger le CV</a>
                    </div>
                </div>
                <div class="row col-md-5 align-items-center shadow mx-2 mt-4 col-12 p-3">
                    <img class="col-sm-5 col-10 m-auto rounded-circle" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
                    <div class="col-sm-7">
                        <h4>AHOUISSOU Bai <small><i style="color :rgba(0, 0, 0, 0.538)">Posted on February 19, 2016</i></h4>
                        <strong>(baiahouissou@gmail.com)</strong>
                        <p class="mt-1">Lorem ipsum dolor dignissimos similique eligendi fuga ipsam unde numquam sunt debitis, illo ipsum excepturi quos. Ab, corporis voluptas!</p>
                        <a href="" class="inscrire mt-3">Télécharger le CV</a>
                    </div>
                </div>
                <div class="row col-md-5 align-items-center shadow mx-2 mt-4 col-12 p-3">
                    <img class="col-sm-5 col-10 m-auto rounded-circle" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
                    <div class="col-sm-7">
                        <h4>AHOUISSOU Bai <small><i style="color :rgba(0, 0, 0, 0.538)">Posted on February 19, 2016</i></h4>
                        <strong>(baiahouissou@gmail.com)</strong>
                        <p class="mt-1">Lorem ipsum dolor dignissimos similique eligendi fuga ipsam unde numquam sunt debitis, illo ipsum excepturi quos. Ab, corporis voluptas!</p>
                        <a href="" class="inscrire mt-3">Télécharger le CV</a>
                    </div>
                </div>

            </div>
        </main> --}}

        <main class="mt-4 text-center text-lg-start">

            <div class="row justify-content-center mx-sm-0 mx-2">
                <div class="row col-sm-5 col-10 align-items-center shadow mx-2 mt-4 py-4">
                    <img class="col-lg-5 col-7 m-auto rounded-circle" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
                    <div class="col-lg-7 mt-3 mt-lg-0">
                        <div class="row">
                            <h4 class="col-lg-6">AHOUISSOU Bai </h4>
                            <h4  class="col-lg-6" style="color :rgba(0, 0, 0, 0.538)"><small>Posted on February 19, 2016</small></h4>
                        </div>
                        <strong class="text-break">(baiahouissou@gmail.com)</strong>
                        <p class="mt-1">Lorem ipsum dolor dignissimos similique eligendi fuga ipsam unde numquam sunt debitis, illo ipsum excepturi quos. Ab, corporis voluptas!</p>
                        <a href="" class="inscrire mt-3">Télécharger le CV</a>
                    </div>
                </div>
                <div class="row col-sm-5 col-10 align-items-center shadow mx-2 mt-4 py-4">
                    <img class="col-lg-5 col-7 m-auto rounded-circle" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
                    <div class="col-lg-7 mt-3 mt-lg-0">
                        <div class="row">
                            <h4 class="col-lg-6">AHOUISSOU Bai </h4>
                            <h4  class="col-lg-6" style="color :rgba(0, 0, 0, 0.538)"><small>Posted on February 19, 2016</small></h4>
                        </div>
                        <strong class="text-break">(baiahouissou@gmail.com)</strong>
                        <p class="mt-1">Lorem ipsum dolor dignissimos similique eligendi fuga ipsam unde numquam sunt debitis, illo ipsum excepturi quos. Ab, corporis voluptas!</p>
                        <a href="" class="inscrire mt-3">Télécharger le CV</a>
                    </div>
                </div>
                <div class="row col-sm-5 col-10 align-items-center shadow mx-2 mt-4 py-4">
                    <img class="col-lg-5 col-7 m-auto rounded-circle" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
                    <div class="col-lg-7 mt-3 mt-lg-0">
                        <div class="row">
                            <h4 class="col-lg-6">AHOUISSOU Bai </h4>
                            <h4  class="col-lg-6" style="color :rgba(0, 0, 0, 0.538)"><small>Posted on February 19, 2016</small></h4>
                        </div>
                        <strong class="text-break">(baiahouissou@gmail.com)</strong>
                        <p class="mt-1">Lorem ipsum dolor dignissimos similique eligendi fuga ipsam unde numquam sunt debitis, illo ipsum excepturi quos. Ab, corporis voluptas!</p>
                        <a href="" class="inscrire mt-3">Télécharger le CV</a>
                    </div>
                </div>
            </div>
        </main>





        <footer>
            <x-partials.footer></x-partials.footer>
        </footer>

        <script src="{{asset('js/script.js')}}"></script>
        <script>AOS.init();</script>
     {{-- @include('partials._footer') --}}
    </body>
    </html>

