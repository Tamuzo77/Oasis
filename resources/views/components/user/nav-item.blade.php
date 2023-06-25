@props(['title'=>'title4gotten', 'toggled'=>false, 'role'=>'', 'datatoggle'=> '', 'dp'=> ''])
@php
    if($toggled)
    {
        $role = 'button';
        $dp = 'dropdown-toggle';
        $datatoggle = 'dropdown';
    }
@endphp
<li class="nav-item @if($toggled) dropdown @endif">
    <a {{ $attributes(['class' => "nav-link $dp ", 'href'=>'', "role" => "$role ", "data-bs-toggle" => "$datatoggle" ]) }} >{{ $title }}</a>

    @if ($toggled)
    <ul class="dropdown-menu">
        {{-- use the nav-sub-link component --}}
        {{ $slot }}
    </ul>
    @endif
</li>