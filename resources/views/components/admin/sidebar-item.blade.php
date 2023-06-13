@props(['title' => 'Titre', 'separator', 'icon' => 'alert-circle', 'toggle', 'id' => '', 'show'])

@if ($separator ?? false)
    <li class="nav-item">
        <div class="navbar-heading">{{ $separator }}</div>
    </li>
@endif
@php
    $id = strtolower($title);
@endphp
<!-- Nav item -->
<li class="nav-item">
    <a {{ $attributes(['class' => 'nav-link has-arrow ', 'href' => '#!', 'data-bs-target'=>"#$id", 'aria-expanded'=>'false', 'aria-controls'=>"$id"]) }}>
        <i data-feather="{{ $icon ?? '' }}" class="nav-icon me-2 icon-xxs">
        </i> {{ ucwords($title) }}
    </a>
    @if($toggle ?? false)
    
        <div id="{{ $id }}" class="collapse  {{ $show ?? false }} " data-bs-parent="#sideNavbar">
            <ul class="nav flex-column">
                {{ $slot }}
            </ul>
        </div>
    @endif
</li>
