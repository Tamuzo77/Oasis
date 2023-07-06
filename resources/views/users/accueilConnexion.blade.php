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
.card{
    border: none !important;
}

</style>

<body>

    <div class="justify-items-center text-center pt-3 pb-3 h-auto text-white welcome ">
        <p>Bienvenue Monsieur John Doe</p>
    </div>

    <header class="nav-bar">
        <x-partials.header></x-partials.header>
        <div class="div-ac-title col-sm-10 col-md-5 text-white opacity-80"  style="">
            <div class="accueil-title mb-4">Lorem ipsum  minus .</div>
            <p class="inscrire col-5 text-center">Consulter la formation</p>
            <x-partials.whatsapp></x-partials.whatsapp>
        </div>
    </header>
    <main class="mx-4"  data-aos="fade-up" data-aos-duration="3000">
        <div class="mt-5 mb-3">
            <h3>Présentation</h3>
            <div class=" row align-items-center justify-content-center">
                    <img class="col-sm-3 mb-sm-none mb-3" src="oasis/images/bruce-barrow-aI9_9T03OIk-unsplash.jpg" alt="" style="border-radius:30px;">
                <p class=" col-sm-9">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, quod tempora excepturi doloribus voluptates sed sunt dignissimos, laboriosam laudantium nulla aperiam dolores nisi, aspernatur vel quisquam totam accusamus dolore
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, vero sit quidem corporis tenetur exercitationem et nostrum, ex ab architecto minus molestiae dicta magni reprehenderit id atque nesciunt? Unde, temporibus.
                </p>
            </div>

        </div>
        <div>
            <h3 class="mt-3 mb-3">Objectifs</h3>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est quis odio tempore, molestias repudiandae ipsum ratione explicabo nostrum quasi excepturi aut, perferendis culpa rem deleniti alias reiciendis necessitatibus illum eius!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas a ad laudantium sint dolorum. Quaerat sint, perspiciatis blanditiis assumenda animi, dolorum doloremque ipsa repellendus voluptatibus accusamus rem temporibus voluptate accusantium?
            </p>
            <h3 class="mt-3 mb-3">Public cible</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem alias enim at reiciendis nemo. Eligendi blanditiis facere in vel nulla unde expedita omnis iusto molestiae. Quas, minus. Quia, cumque debitis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio repellat amet debitis, similique inventore dolorum quod quisquam dolore fugit accusantium illum accusamus ex omnis quaerat dignissimos odio aperiam suscipit!
            </p>
            <h3 class="mt-3 mb-3">Avantages</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi accusantium, suscipit provident maxime sed dolore voluptates recusandae repellat quaerat tempore ipsum dolor enim sint ratione porro vitae natus cupiditate mollitia.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, est? Quidem, quia veniam accusamus maiores id tempora nam inventore, velit repudiandae corrupti, rerum voluptate voluptatum corporis necessitatibus porro ex sequi.
            </p>
            <h3 class="mt-3 mb-3">Modalités de participation</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero qui, adipisci, fuga neque velit ipsam eius odit vel hic obcaecati, eos explicabo reprehenderit doloribus dolor maxime itaque aspernatur debitis enim.
            </p>
            <h3 class="mt-3 mb-3">Prochaine session</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero qui, adipisci, fuga neque velit ipsam eius odit vel hic obcaecati, eos explicabo reprehenderit doloribus dolor maxime itaque aspernatur debitis enim.
            </p>
        </div>
    </main>
    <div class="text-center mb-5"  data-aos="fade-up" data-aos-duration="3000">
        <button class="inscrire mt-5 mb-5">Consulter la formation</button>
        <h3 class="">Conditions et modalités de participation</h3>
        <div class="photos row justify-content-center mx-5">
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mt-4 card">
                <img  src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
                <p class=" text-break text-center mt-3">loremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</p>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mt-4 card">
                <img  src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
                <p class=" text-break text-center mt-3">loremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</p>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mt-4 card">
                <img  src="oasis/images/charlesdeluvio-97Ir6ym25N4-unsplash.jpg" alt="">
                <p class=" text-break text-center mt-3">loremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</p>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mt-4 card">
                <img  src="oasis/images/mwangi-gatheca-qlKaN7eqay8-unsplash.jpg" alt="">
                <p class=" text-break text-center mt-3">loremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</p>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mt-4 card">
                <img src="oasis/images/charlesdeluvio-97Ir6ym25N4-unsplash.jpg" alt="">
                <p class=" text-break text-center mt-3">loremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</p>
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
