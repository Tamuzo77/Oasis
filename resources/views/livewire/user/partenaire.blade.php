<div class="partenaires container mb-5">
    <h2 class="text-center">Nos partenaires</h2>
    <div class="row justify-content-center">
        @foreach ($partenaires as $partenaire)
            <img class="col-lg-2 col-sm-3 p-3 col-6 mt-4 " src="{{ asset("storage/$partenaire->logo") }}" alt="">
        @endforeach
    </div>
</div>
