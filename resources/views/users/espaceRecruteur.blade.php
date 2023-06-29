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


</style>

<body>

    <header class="nav-bar">
        <x-partials.header></x-partials.header>
        <div class="div-ac-title col-md-5 text-white opacity-80" style="">
            <div class="accueil-title mb-4">Lorem ipsum  minus .</div>
            <p class="inscrire col-5 text-center">Envoyer mon cv</p>
            <p class="inscrire col-5 text-center">Espace recruteur</p>

        </div>
    </header>
    <main class="mt-5 mx-5">
        <h2 class="text-center mb-4">Offres d'emploi</h2>

        <div class="row align-items-center shadow p-4 mb-4 text-center text-md-start">
            <img class=" col-md-2 rounded-circle rounded-none" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
            <div class=" row col-md-8 mt-3 mb-3 mt-md-0 mb-md-0">
                <h4 class="mb-2 ">Poste recherché</h4>
                <p class="col-md-3">Publiée par </p>
                <h5 class="col-md-6 bold text-uppercase">Recruteur</h5>
                <p class="col-md-3">le 12 mai 2023</p>
                <p class="bold">Région</p>
            </div>
            <button class="inscrire col-md-2 col-xl-1 h-25 col-sm-3 col-5 m-auto m-md-none">voir plus</button>
        </div>
        <div class="row align-items-center shadow p-4 mb-4 text-center text-md-start">
            <img class=" col-md-2 rounded-circle rounded-none" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
            <div class=" row col-md-8 mt-3  mt-md-0 mb-md-0">
                <h4 class="mb-2">Poste recherché</h4>
                <p class="col-md-3">Publiée par </p>
                <h5 class="col-md-6 bold text-uppercase" style="font">ahouissou bai clemence esperance</h5>
                <p class="col-md-3">le 12 mai 2023</p>
                <p class="bold">Région</p>
            </div>
            <button class="inscrire col-md-2 col-xl-1 h-25 col-sm-3 col-5 m-auto m-md-none">voir plus</button>
        </div>
    </main>




    <footer>
        <x-partials.footer></x-partials.footer>
    </footer>

    <script src="{{asset('js/script.js')}}"></script>

 {{-- @include('partials._footer') --}}
</body>
</html>
