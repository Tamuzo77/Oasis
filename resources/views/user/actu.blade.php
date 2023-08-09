@props(['title' => 'Actualite', 'headerText', 'imageAccueil' => $page->imageModels[0]->image_url])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('user.frontend.style')
    <title> Oasis - {{ $title }}</title>
    <style>
        .nav-bar {
            height: auto;
            object-fit: cover;
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
</head>

<body>

    <header class="nav-bar">
        @include('user.partials._navbar')
        <div class="div-ac-title col-md-5 text-white opacity-80" style="">
            <x-partials.whatsapp></x-partials.whatsapp>
        </div>
    </header>



    <style>
        .div-footer {
            background-image: url({{asset('oasis/accueil/footer.png') }});
        }
    </style>
    <footer>
        <div class="div-footer pt-5 pb-5 mt-5">
            <div class="footer-bg text-center">

                <div class="footer-filigrane mb-4">
                    <img src="{{ asset('oasis/accueil/Oasis-filigrane 3.png') }}" alt="">
                </div>

                <div class="footer-logos">
                    <a href="https://web.facebook.com/p/Cabinet-Oasis-Consulting-Sarl-100063597937941/?_rdc=1&_rdr"><img
                            src="{{ asset('oasis/accueil/Vector (5).png') }}" alt=""></a>
                    <a href="https://www.instagram.com/oasisconsulting/"><img src="{{ asset('oasis/accueil/Vector (4).png') }}"
                            alt=""></a>
                    <a href="https://bj.linkedin.com/company/oasis-consulting-sarl?trk=public_jobs_topcard_logo"><img
                            src="{{ asset('oasis/accueil/Vector (3).png') }}" alt=""></a>
                    <a href="https://www.youtube.com/@oasisconsulting3787"><img src="{{ asset('oasis/accueil/Vector2.png') }}"
                            alt=""></a>
                </div>
                <div class=" text-white mt-3 text-break">
                    <p>Oasis Consulting Tous droits réservés - 2023</p>
                </div>
            </div>
        </div>
    </footer>

    @include('user.frontend.script')
</body>

</html>
