<div class="navbar-vertical navbar nav-dashboard">
    <div class="h-100" data-simplebar>
        <!-- Brand logo -->
        {{-- <x-admin.brand-logo/> --}}
        <a href="/">
            <x-partials.logo class="ms-4" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            {{ $slot }}
            <!-- Nav item -->
            

        </ul>


    </div>
</div>