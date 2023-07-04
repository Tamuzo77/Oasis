<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
</style>

<body>

    <header class="nav-bar">
        <x-partials.header></x-partials.header>
        <div>
            <div class="div-ac-title col-md-5 text-white opacity-80" style="">
                <div class="accueil-title mb-4">Lorem ipsum  minus .</div>
                <p> sit amet consectetur adipisicing elit  Numquam magnam eveniet repellendus . optio corporis vel id eaque nesciunt voluptatum, aperiam deleniti non tempora necessitatibus tempore </p>
            </div>

               <x-partials.whatsapp></x-partials.whatsapp>
        </div>
    </header>
    <main class="text-center mt-4">
        <h2>Nos Formations</h2>
        <div class="row justify-content-center mx-4">
            <div class="row col-md-5 col-12 align-items-center shadow mx-2 mt-4 p-3 formation">
                <img class="col-sm-5 col-10 m-auto" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
                <div class="col-sm-7">
                    <h4>Devenez Consultant Professionnel</h4>
                    <p>Lorem ipsum dolor dignissimos similique eligendi fuga ipsam unde numquam sunt debitis, illo ipsum excepturi quos. Ab, corporis voluptas!</p>
                    <a href=""><button class="inscrire">Consulter la formation</button></a>
                </div>
            </div>
            <div class="row col-md-5 align-items-center shadow mx-2 mt-4 col-12 p-3 formation">
                <img class="col-sm-5 col-10 m-auto" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
                <div class="col-sm-7">
                    <h4>Devenez Consultant Professionnel</h4>
                    <p>Lorem ipsum dolor dignissimos similique eligendi fuga ipsam unde numquam sunt debitis, illo ipsum excepturi quos. Ab, corporis voluptas!</p>
                    <a href=""><button class="inscrire mt-3">Consulter la formation</button></a>
                </div>
            </div>
            <div class="row col-md-5 align-items-center shadow mx-2 mt-4 col-12 p-3 formation">
                <img class="col-sm-5 col-10 m-auto" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
                <div class="col-sm-7">
                    <h4>Devenez Consultant Professionnel</h4>
                    <p>Lorem ipsum dolor dignissimos similique eligendi fuga ipsam unde numquam sunt debitis, illo ipsum excepturi quos. Ab, corporis voluptas!</p>
                    <a href=""><button class="inscrire mt-3">Consulter la formation</button></a>
                </div>
            </div>
        </div>
        <a href=""><button class="inscrire mt-4 mb-5">Téléchargez notre catalogue de formation</button></a>
        <h2>Déposer une requête de formation</h2>
        <div>
            <input type="text" name="" id="" placeholder="Votre Nom">
            <input type="email" name="" id="" placeholder="Votre Email">
            <input type="tel" name="" id="" placeholder="Votre Téléphone">
        </div>
    </main>










    <footer>
        <x-partials.footer></x-partials.footer>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

    {{-- @include('partials._footer') --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init()</script>
</body>

</html>
