<x-user.layout :title="$formation->name" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">
    <x-slot name="headerText">
        <div class="accueil-title">OASIS Consulting</div>
        @auth
        <form action="{{route('formationInscription', \Crypt::encrypt($formation->slug))}}" method="get">
            @csrf
            @if ($formation->price > 0 && !Auth::user()->formations()->where('formation_id',$formation->id)->exists() )
            <kkiapay-widget amount="{{ $formation->price }}" key="{{ env('KIKYAPAY_KEY') }}"
                url="{{ asset('oasis/accueil/logo Oasis Consulting 1.png') }}" position="center" sandbox="true" data=""
                callback="{{route('formationInscription', \Crypt::encrypt($formation->slug))}}">
            </kkiapay-widget>
            @else

            <button type="submit" data-bs-toggle="modal" data-bs-target="#inscriptionModalCenter"
                class="inscrire col-5 text-center">
                @if(Auth::user()->formations()->where('formation_id',$formation->id)->exists())
                    {{ __('Consulter') }}
                    @else
                    {{ __('Inscrivez vous à la formation') }}

                @endif
            </button>
            @endif
        </form>

            @else
            <a href="/inscription" class="inscrire col-5 text-center">Inscrivez vous pour souscrire à une formation</a>
        @endauth
    </x-slot>
<x-user.flash />
    <main class="justify-content-center m-auto" data-aos="fade-up" data-aos-duration="3000" style="width:70%">
        <div class="mt-5 mb-3 px-lg-5">
            <h3>Présentation</h3>
            <div class=" row align-items-center justify-content-center">
                <img class="col-sm-4 col-lg-3 mb-sm-none mb-3" src="{{ asset("storage/$formation->cover_image") }}"
                    alt="" style="border-radius:30px;">
                <p class=" col-sm-8">
                    {{ $formation->presentation }}
                </p>
            </div>

        </div>
        <div class="px-lg-5">
            <h3 class="mt-3 mb-3">Objectifs</h3>
            <p>
                {{ $formation->objectif }}
            </p>
            <h3 class="mt-3 mb-3">Public cible</h3>
            <p>
                {{ $formation->public }}
            </p>
            <h3 class="mt-3 mb-3">Avantages</h3>
            <p>
                {{ $formation->avantage }}
            </p>
            <h3 class="mt-3 mb-3">Modalités de participation</h3>
            <p>
                {{ $formation->modalite }}
            </p>
            <h3 class="mt-3 mb-3">Prochaine session</h3>
            <p>
                {{ $formation->session }}
            </p>
        </div>
    </main>


</x-user.layout>
