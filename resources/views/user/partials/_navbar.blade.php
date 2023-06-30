<nav class="navbar navbar-expand-lg pt-0 absolute">
    <div class=" container-xl pt-0">
        <a class="navbar-brand col-xl-2 col-lg-2 ms-lg-auto" href="#">
            <x-partials.logo></x-partials.logo>
        </a>
        <div class="navbar-toggler float-right" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon" style="color:#4684BF; "></span>
        </div>
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <livewire:user.nav-list />

            <a id="icon-connexion" class=" me-auto ms-sm-2"><a href="/connexion"><img src="oasis/accueil/Vector (1).png"
                        alt="" width="50px" height="50px" style="right:0;list-style:none;"> </a></a>

        </div>
    </div>
</nav>