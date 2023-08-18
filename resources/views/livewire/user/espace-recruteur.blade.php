<main class="mt-5 offres-emploi" data-aos="fade-up" data-aos-duration="3000">
    <h2 class="text-center mb-4">Offres d'emploi</h2>
    @forelse ($emplois = \App\Models\Emploi::where('visible', true)->latest()->paginate(5) as $emploi)
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
            <a href="/offres" class="inscrire col-md-2 col-xl-1 h-25 col-sm-3 col-5 m-auto m-md-none text-center">voir plus</a>

        </div>

    @empty
        <x-partials.vide />
    @endforelse
    {{ $emplois->links() }}
</main>
