    <main class="mt-4 text-center text-lg-start">

        <div class="row justify-content-center mx-sm-0 mx-2">
            @forelse ($cvs as $cv)
                <div class="row col-sm-5 col-10 align-items-center shadow mx-2 mt-4 py-4">
                    <img class="col-lg-5 col-7 m-auto rounded-circle" src="{{ asset("storage/$cv->picture") }}"
                        alt="">
                    <div class="col-lg-7 mt-3 mt-lg-0">
                        <div class="row">
                            <h4 class="col-lg-6">{{ ucwords("$cv->firstname") . ' ' . ucwords("$cv->lastname") }}</h4>
                            <h4 class="col-lg-6" style="color :rgba(0, 0, 0, 0.538)">
                                <small>{{ $cv->created_at->diffForHumans() }}</small></h4>
                        </div>

                        <p class="mt-1">{{ $cv->biography }}</p>
                            <kkiapay-widget amount="200" key="{{ env('KIKYAPAY_KEY') }}"
                                url="{{ asset('oasis/accueil/logo Oasis Consulting 1.png') }}" position="center" sandbox="true" data=""
                                callback="{{ asset("storage/$cv->cv_path") }}">
                            </kkiapay-widget>
                    </div>
                </div>
            @empty
                <x-partials.vide />
            @endforelse
        </div>
    </main>
