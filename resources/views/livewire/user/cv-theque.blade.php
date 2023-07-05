    <main class="mt-4 text-center text-lg-start">

        <div class="row justify-content-center mx-sm-0 mx-2">
            @foreach ($cvs as $cv )
                            <div class="row col-sm-5 col-10 align-items-center shadow mx-2 mt-4 py-4">
                <img class="col-lg-5 col-7 m-auto rounded-circle"
                    src="{{ asset("storage/$cv->picture") }}" alt="">
                <div class="col-lg-7 mt-3 mt-lg-0">
                    <div class="row">
                        <h4 class="col-lg-6">{{ ucwords("$cv->firstname") . ' ' . ucwords("$cv->lastname") }}</h4>
                        <h4 class="col-lg-6" style="color :rgba(0, 0, 0, 0.538)"><small>{{ $cv->created_at->diffForHumans() }}</small></h4> 
                    </div>
                    <strong class="text-break">({{ $cv->email }})</strong>
                    <p class="mt-1">{{$cv->biography}}</p>
                    <a href="" class="inscrire mt-3">Télécharger le CV</a>
                </div>
            </div>
            @endforeach
        </div>
    </main>