<main class="mt-5 offres-emploi"  data-aos="fade-up" data-aos-duration="3000">
        <h2 class="text-center mb-4">Offres d'emploi</h2>
        @foreach ($emplois as $emploi )
        @php
            $pic = $emploi->recruteur->logo;
        @endphp
        <div class="row align-items-center shadow p-4 mb-4 text-center text-md-start">
            <img class=" col-md-2 col-8 col-sm-6 m-auto rounded-circle" src="{{ asset("storage/$pic") }}" alt="">
            <div class=" row col-md-8 mt-3 mb-3 mt-md-0 mb-md-0">
                <h4 class="mb-2 ">{{ $emploi->libelle }}</h4>
                <p class="col-md-3">Publiée par </p>
                <h5 class="col-md-6 bold text-uppercase">{{ $emploi->recruteur->name }}</h5>
                <p class="col-md-3">{{ $emploi->created_at->diffForHumans() }}</p>
                <p class="bold">{{ $emploi->ville->name }}</p>
            </div>
            <a href=" " class="inscrire  col-md-2 col-xl-1 h-25 col-sm-3 col-5 m-auto m-md-none">voir plus</a>
        </div>
        @endforeach


        <div class="row align-items-center shadow p-4 mb-4 text-center text-md-start">
            <img class=" col-md-2 col-8 col-sm-6 m-auto rounded-circle" src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
            <div class=" row col-md-8 mt-3  mt-md-0 mb-md-0">
                <h4 class="mb-2">Poste recherché</h4>
                <p class="col-md-3">Publiée par </p>
                <h6 class="col-md-6 bold text-uppercase" style="font">ahouissou bai clemence esperance</h6>
                <p class="col-md-3">le 12 mai 2023</p>
                <span class="bold">Région</span>
            </div>
            <button class="inscrire col-md-2 col-xl-1 h-25 col-sm-3 col-5 m-auto m-md-none">voir plus</button>
        </div>
    </main>