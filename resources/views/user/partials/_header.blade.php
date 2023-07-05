@if(Session::has('logged'))
<div class="justify-items-center text-center pt-3 pb-3 text-white welcome ">
    <p>Bienvenue {{ auth()->user()->name }}</p>
</div>
@endif


<header class="nav-bar">
    {{-- <x-partials.header></x-partials.header> --}}
    @include('user.partials._navbar')
    <div class="div-ac-title col-md-5 text-white opacity-80" style="">
        {{ $headerText ?? false }}
        <x-partials.whatsapp></x-partials.whatsapp>
   </div>
    
</header>