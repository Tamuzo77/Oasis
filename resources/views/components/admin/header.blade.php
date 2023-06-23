@props(['title' =>'', 'subtitle' =>'', 'ptitle' =>''])
<div class="mb-8" id="intro">
    <h1 class="mb-0 h2 ">{{$title ?? '' }}</h1>
    <h3 class="mb-0 h4">{{ $ptitle ?? '' }}</h3>
    <p class="mb-0 text-muted">{{$subtitle ?? ''}}</p>
</div>