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
<body style="background-image:url('oasis/accueil/Oasis-filigrane 1.png'); color:#A9A9A9;object-fit:cover;background-size:cover;background-position:center; ">



    <header>
        <x-partials.header></x-partials.header>
    </header>
    <div class=" justify-items-center text-center pt-3 pb-3 baniere h-auto text-white welcome">
        <p>Offres d'emplois >> Dépôt de CV </p>
    </div>



    <div class="depotCV pt-4 mx-5 pb-5"  data-aos="fade-up" data-aos-duration="3000">
        <form action="POST" class="pb-5 mt-5">
            <h1 class="text-center">Remplissez ce formulaire</h1>

            <div class="justify-content-center row">
                <div class="col-md-4 col-sm-6 mt-3">
                    <label  for="name">Nom</label><br>
                    <input class="w-100"  type="text" name="name" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label  for="name">Prénom</label><br>
                    <input class="w-100"  type="text" name="age" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="email">Email</label><br>
                    <input class="w-100" type="email" name="email" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="tel">Téléphone</label><br>
                    <input class="w-100" type="tel" name="tel" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="age">Age</label><br>
                    <input class="w-100" type="number" name="profession" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                        <label for="cv">Importer mon CV</label><br>
                        <div class="file-upload w-100">
                            <div class="file-upload-select align-items-center row">
                            <div class="file-select-button col-sm-6" ><a class="btn btn-primary btn-icon-up-file w-100">Add File</a></div>
                            <div class="file-select-name col-sm-6">No file chosen...</div>
                            <input type="file" name="file-upload-input" id="file-upload-input">
                            </div>
                        </div>

                    </div>
                </div>
                <div class=" mt-4 mb-2 mt-md-4">
                    <label for="biographie">Biographie Professionnelle </label><br>
                    <textarea name="" id="" cols="30" rows="10" class="w-100"></textarea>
                </div>
                <div class="col-md-4 col-sm-6 mt-3 w-100">
                    <label for="cv">Importer mon CV</label><br>
                    <div class="file-upload w-100">
                        <div class="file-upload-select1 align-items-center row">
                        <div class="file-select-button col-sm-5 col-md-3" ><a class="btn btn-primary btn-icon-up-file w-100">Add File</a></div>
                        <div class="file-select-name1 col-sm-7 col-md-9">No file chosen...</div>
                        <input type="file" name="file-upload-input1" id="file-upload-input1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
            <a href="">
                <button class="inscrire">
                    Dépôser mon CV
                </button>
            </a>
            </div>
        </form>

        <x-partials.whatsapp></x-partials.whatsapp>
        </div>

    <footer>
        <x-partials.footer></x-partials.footer>
    </footer>

    <script src="{{asset('js/script.js')}}"></script>
    <script>


    </script>
         {{-- @include('partials._footer') --}}
</body>
</html>
