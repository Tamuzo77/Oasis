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
<body>



    <header class="nav-bar">
        <x-partials.header></x-partials.header>
    </header>
    <div class=" justify-items-center text-center pt-3 pb-3 h-auto text-white welcome">
        <p>Offres d'emplois >> Dépôt de CV </p>
    </div>
    <div class="depotCV pt-4 mx-5 pb-5" style="background-image:url('oasis/accueil/Oasis-filigrane 1.png'); color:#A9A9A9;object-fit:cover;background-size:cover;background-position:center; ">
        <form action="POST" class="pb-5 mt-5">
            <h1 class="text-center">Remplissez ce formulaire</h1>

            <div class="justify-content-center row">
                <h3 class="mt-4 ">I - Présentation</h3>
                <div class="col-md-3 col-sm-6 mt-3 mt-md-1">
                    <label  for="name">Nom et Prénoms</label><br>
                    <input class="w-100"  type="text" name="name" id="">
                </div>
                <div class="col-md-2 col-sm-6 mt-3 mt-md-1">
                    <label  for="age">Age</label><br>
                    <input class="w-100"  type="number" name="age" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3 mt-md-1">
                    <label for="email">Email</label><br>
                    <input class="w-100" type="email" name="email" id="">
                </div>
                <div class="col-md-3 col-sm-6 mt-3 mt-md-1">
                    <label for="tel">Téléphone</label><br>
                    <input class="w-100" type="tel" name="tel" id="">
                </div>

                <h3 class="mt-4">II - Expérience professionnelle</h3>
                <div class="col-md-4 col-sm-6 mt-3 mt-md-1">
                    <label for="profession">Profession actuelle</label><br>
                    <input class="w-100" type="text" name="profession" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3 mt-md-1">
                    <label for="structure">Structure</label><br>
                    <input class="w-100" type="text" name="structure" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3 mt-md-1">
                    <label for="ville">Ville/Pays</label><br>
                    <input class="w-100" type=" " name="ville" id="">
                </div>
                <h3 class="mt-4">III -Autres </h3>
                <div class="col-md-4 col-sm-6 mt-3 mt-md-1">
                    <label for="cv">Importer mon CV</label><br>
                    <input class="w-100" type="file" name="cv" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3 mt-md-1">
                    <label for=" ">Importer ma photo</label><br>
                    <input class="w-100" type="file" name="" id="">
                </div>
            </div>
            <div class="text-center mt-5">
                <button class="inscrire">
                    Dépôser mon CV
                </button>
            </div>
        </form>


        </div>

    <footer>
        <x-partials.footer></x-partials.footer>
    </footer>

    <script src="{{asset('js/script.js')}}"></script>

         {{-- @include('partials._footer') --}}
</body>
</html>
