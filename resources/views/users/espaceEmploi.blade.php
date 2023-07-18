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

<body
    style="background-image:url('oasis/accueil/Oasis-filigrane 1.png'); color:#A9A9A9;object-fit:cover;background-size:cover;background-position:center; ">



    <header>
        <x-partials.header></x-partials.header>
    </header>
    <div class=" justify-items-center text-center pt-3 pb-3 baniere h-auto text-white welcome">
        <p>Offres d'emplois</p>
    </div>



    <div class="depotCV pt-4 mx-5 pb-3" data-aos="fade-up" data-aos-duration="3000">
        <form action="POST" class=" mt-5">
            <h1 class="text-center">Remplissez ce formulaire</h1>

            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="name">Nom de la structure</label><br>
                    <input class="w-100" type="text" name="name" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="email">Email</label><br>
                    <input class="w-100" type="email" name="" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="name">Téléphone</label><br>
                    <input class="w-100" type="text" name="age" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="name">Numéro IFU</label><br>
                    <input class="w-100" type="text" name="age" id="">
                </div>

                <div class="box col-md-4 col-sm-6 mt-3 justify-content-center">
                    <input style="display: none;" type="file" name="file-7[]" id="file-7"
                        class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
                    <label class="w-100 text-center bold text-white" for="file-7"><span></span><strong
                            class="w-100"><svg style="color: white !important" xmlns="http://www.w3.org/2000/svg"
                                width="20" height="17" viewBox="0 0 20 17">
                                <path
                                    d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                                </path>
                            </svg> Importer le logo de l'entreprise&hellip;</strong></label>
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="poste">Poste</label><br>
                    <input class="w-100" type="text" name="poste" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="name">Lien Facebook</label><br>
                    <input class="w-100" type="text" name="age" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="name">Lien Likedin</label><br>
                    <input class="w-100" type="text" name="age" id="">
                </div>
                <div class="col-md-4 col-sm-6 mt-3">
                    <label for="name">Lien Github</label><br>
                    <input class="w-100" type="text" name="age" id="">
                </div>

                <div class=" col-sm-6 mt-3">
                    <label for="secteur">Domaine</label><br>
                    <input class="w-100" type="tel" name="secteur" id="">
                </div>
                <div class=" col-sm-6 mt-3">
                    <label for="ville">Ville</label><br>
                    <input class="w-100" type="ville" name="secteur" id="">
                </div>
                <div class=" col-sm-6 mt-3">
                    <label for="desciption">Description du poste</label><br>
                    <textarea class="w-100" name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
    </div>
    <div class="text-center">
        <a href="" class="inscrire">
            Enregistrer
        </a>
    </div>
    </form>

    <x-partials.whatsapp></x-partials.whatsapp>
    </div>

    <footer>
        <x-partials.footer></x-partials.footer>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        (function(e, t, n) {
            var r = e.querySelectorAll("html")[0];
            r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
        })(document, window, 0);
        (function(document, window, index) {
            var inputs = document.querySelectorAll('.inputfile');
            Array.prototype.forEach.call(inputs, function(input) {
                var label = input.nextElementSibling,
                    labelVal = label.innerHTML;

                input.addEventListener('change', function(e) {
                    var fileName = '';
                    if (this.files && this.files.length > 1)
                        fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}',
                            this.files.length);
                    else
                        fileName = e.target.value.split('\\').pop();

                    if (fileName)
                        label.querySelector('span').innerHTML = fileName;
                    else
                        label.innerHTML = labelVal;
                });

                // Firefox bug fix
                input.addEventListener('focus', function() {
                    input.classList.add('has-focus');
                });
                input.addEventListener('blur', function() {
                    input.classList.remove('has-focus');
                });
            });
        }(document, window, 0));
    </script>
    {{-- @include('partials._footer') --}}
</body>

</html>
