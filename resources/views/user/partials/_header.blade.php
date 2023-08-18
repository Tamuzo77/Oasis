@if(Session::has('logged'))
<div class="justify-items-center text-center pt-3 pb-3 text-white welcome ">
    <h5>Bienvenue {{ auth()->user()->name }}</h5>
</div>
@endif


<header class="nav-bar">
    <div class="blur">
        {{-- <x-partials.header></x-partials.header> --}}
        @include('user.partials._navbar')
        <div class="div-ac-title col-md-8 col-lg-7 text-white opacity-80" style="">
            {{ $headerText ?? false }}
            <x-partials.whatsapp></x-partials.whatsapp>
        </div>
    </div>

</header>
