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
</style>

<body>

    <header class="nav-bar">
        <x-partials.header></x-partials.header>
        <div class="div-ac-title col-md-5 text-white opacity-80" style="">
            <div class="accueil-title mb-4">Lorem ipsum minus .</div>
            <a href="">
                <p class="inscrire col-5 text-center">Envoyer mon cv</p>
            </a>
            <a href="">
                <p class="inscrire col-5 text-center">Espace recruteur</p>
            </a>
            <x-partials.whatsapp></x-partials.whatsapp>
        </div>
    </header>
    <main class="mt-5 offres-emploi" data-aos="fade-up" data-aos-duration="3000">
        <h2 class="text-center mb-4">Offres d'emploi</h2>
        @foreach ($emplois as $emploi)
            @php
                $pic = $emploi->recruteur->logo;
            @endphp
            <div class="row align-items-center shadow p-4 mb-4 text-center text-md-start">
                <img class=" col-md-2 col-8 col-sm-6 m-auto rounded-circle"
                    src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
                <div class=" row col-md-8 mt-3 mb-3 mt-md-0 mb-md-0">
                    <h4 class="mb-2 ">{{ $emploi->libelle }}</h4>
                    <p class="col-md-3">Publiée par </p>
                    <h5 class="col-md-6 bold text-uppercase">{{ $emploi->recruteur->name }}</h5>
                    <p class="col-md-3">{{ $emploi->created_at->diffForHumans() }}</p>
                    <p class="bold">{{ $emploi->ville->name }}</p>
                </div>
                <a href=""><button class="inscrire col-md-2 col-xl-1 h-25 col-sm-3 col-5 m-auto m-md-none">voir
                        plus</button></a>
            </div>
        @endforeach


        <div class="row align-items-center shadow p-4 mb-4 text-center text-md-start">
            <img class=" col-md-2 col-8 col-sm-6 m-auto rounded-circle"
                src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
            <div class=" row col-md-8 mt-3  mt-md-0 mb-md-0">
                <h4 class="mb-2">Poste recherché</h4>
                <p class="col-md-3">Publiée par </p>
                <h6 class="col-md-6 bold text-uppercase" style="font">ahouissou bai clemence esperance</h6>
                <p class="col-md-3">le 12 mai 2023</p>
                <span class="bold">Région</span>
            </div>
            <a href="" class="inscrire col-md-2 col-xl-1 h-25 col-sm-3 col-5 m-auto m-md-none text-center"
                data-bs-toggle="modal" data-bs-target="#myModal1">voir plus</a>

            <!-- The Modal -->
            <div class="modal fade" id="myModal1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Détails de l'offre</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            Le Cabinet <span>𝐎𝐚𝐬𝐢𝐬 𝐂𝐨𝐧𝐬𝐮𝐥𝐭𝐢𝐧𝐠 𝐒𝐚𝐫𝐥</span> recrute pour le compte d’un
                            cabinet ophtalmologique basé à Cotonou,<b>UNE SECRETAIRE MEDICALE.</b>

                            <h4>🔰 𝐌𝐈𝐒𝐒𝐈𝐎𝐍 :</h4>
                            <p>Renforcement de l’équipe pour l'accueil et l’édition des reçus et l’établissement des
                                factures aux assurances</p>
                            <ul>
                                <h4>🔰 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐀𝐁𝐈𝐋𝐈𝐓𝐄𝐒 & 𝐀𝐂𝐓𝐈𝐕𝐈𝐓𝐄𝐒 𝐏𝐑𝐈𝐍𝐂𝐈𝐏𝐀𝐋𝐄𝐒 :</h4>

                                <li> Accueil physique et téléphonique des patients</li>
                                <li> Etablissement des tickets de caisse</li>
                                <li> Prise et gestion optimale des rendez-vous</li>
                                <li> Traitement des courriers et dossiers médicaux,</li>
                                <li> Etablissement des factures en fin de mois aux assureurs.</li>
                            </ul>
                            <ul>
                                <h4>🔰 𝐏𝐑𝐎𝐅𝐈𝐋 𝐑𝐄𝐂𝐇𝐄𝐑𝐂𝐇𝐄 : </h4>
                                <li> Avoir entre 25 et 30 ans au 31 décembre 2023,</li>
                                <li> Être titulaire d’un BAC ;</li>
                                <li> Avoir une expérience significative à un poste similaire</li>
                            </ul>

                            <ul>
                                <h4>🔰 𝐐𝐔𝐀𝐋𝐈𝐓𝐄𝐒 𝐑𝐄𝐐𝐔𝐈𝐒𝐄𝐒 :</h4>
                                <li> Avoir une excellente aisance relationnelle</li>
                                <li> Être en capacité de travailler en équipe ;</li>
                                <li> Maitriser outil informatique Maitriser Excel et Word ;</li>
                                <li> Maitriser la transmission des courriers ;</li>
                                <li> Avoir un sens de compte rendu</li>
                            </ul>

                            <ul>
                                <h4>🔰 𝐃𝐎𝐒𝐒𝐈𝐄𝐑 𝐀 𝐃𝐄𝐏𝐎𝐒𝐄𝐑 :</h4>
                                <li> Une lettre de motivation précisant la prétention salariale ;</li>
                                <li> Un CV détaillé contenant,</li>
                                <li> Une Copie de la pièce d’identité ;</li>
                                <li> Une copie des justificatifs (attestations ou certificats de travail) des
                                    expériences antérieures,</li>

                            </ul>

                            Exclusivement en version électronique : La compilation des pièces en fichier unique PDF est
                            à envoyer à l’adresse oasis2consulting@gmail.com et au https://wa.me/22995017601
                            le Mercredi 15 Mars 2023 à 12h12 au plus tard.

                            #recrutement #commerciaux #consulting
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
    </main>
    <x-partials.vide></x-partials.vide>


    <footer>
        <x-partials.footer></x-partials.footer>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        AOS.init();
    </script>
    {{-- @include('partials._footer') --}}
</body>

</html>
