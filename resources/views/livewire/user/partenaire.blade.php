<div class="partenaires mb-5">
    <h2 class="text-center mb-5">Nos partenaires</h2>
    <div class="container">
        <div class="logos">
            <div class="logos-slide">
                @forelse ($partenaires as $partenaire)
                    <img class="mx-4" src="{{ asset("storage/$partenaire->logo") }}" alt="">
                @empty
                    <x-partials.vide />
                @endforelse
            </div>
        </div>
    </div>
</div>
