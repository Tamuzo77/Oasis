    <main class="text-center mt-4">
        <h2>Nos Formations {{ $type }}</h2>
        <div class="row justify-content-center mx-4">
            @forelse ($formations as $formation )
                <div class="row col-md-5 col-12 align-items-center shadow mx-2 mt-4 p-3 formation">
                <img class="col-sm-5 col-10 m-auto" src="{{ asset("storage/$formation->cover_image") }}" alt="">
                <div class="col-sm-7">
                    <h4>{{ $formation->name }}</h4>
                    <p>{{ $formation->presentation }}</p>
                    <a href="/formations/{{ $formation->slug }}"><button class="inscrire">Consulter la formation</button></a>
                </div>
                </div>
                a href=""><button class="inscrire mt-4 mb-5">Téléchargez notre catalogue de formation</button></a>

            @empty
                <x-partials.vide />

            @endforelse
        </div>
        {{--<h2> Déposer une requête de formation</h2>
        <form class="formation justify-content-center mx-5 row mt-4">
            <input class="col-md-3 mx-2 col-sm-5 col-10" type="text" name="" id="" placeholder="Votre Nom">
            <input class="col-md-3 mx-2 col-sm-5 col-10" type="email" name="" id="" placeholder="Votre Email">
            <input class="col-md-3 mx-2 col-sm-5 col-10" type="tel" name="" id="" placeholder="Votre Téléphone">
            <textarea name="" id="" cols="30" rows="10" placeholder="Votre requête de formation"></textarea>
        </form>--}}
    </main>