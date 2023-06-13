@props(['title' =>'Titre Forgotten', 'subtitle' =>''])
<div class="mb-8" id="intro">
    <h1 class="mb-0 h2 ">{{ __("$title ") }}</h1>
    <p class="mb-0 text-muted">{{$subtitle ?? ''}}</p>
</div>