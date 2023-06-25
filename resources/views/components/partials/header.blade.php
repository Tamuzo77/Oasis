{{--

    <header class="container-fluid m-0">
        <div class=" header d-flex align-items-center justify-content-between container-fluid w-100">
            <div class="d-flex align-items-center justify-content-around">
                <div class="float-left" ><x-partials.logo ></x-partials.logo></div>
                <div class="menu d-md-none d-block float-right">

                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
              </div>
            </div>
            <nav class=" row w-100 align-items-center d-none d-md-block d-flex container-fluid">
                <div><a href="index.blade.php">Accueil</a></div>
                <div><a href="#">Qui sommes-nous</a></div>
                <div><a href="#">Réseau RAC</a></div>


                <div class="dropdown">
                    <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Espace emploi
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">CVThèque</a></li>
                      <li><a class="dropdown-item" href="#">Espace recruteur</a></li>
                     <li><a class="dropdown-item" href="#">Dépôt de CV</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Formation
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Formation <br> certifiante</a></li>
                      <li><a class="dropdown-item" href="#">Formation <br> gratuite</a></li>

                    </ul>
                </div>
                <div class="dropdown">
                    <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Boutique
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Kits <br> professionnels</a></li>
                      <li><a class="dropdown-item" href="#">Livres</a></li>

                    </ul>
                </div>

                <div><a href=""><img src="oasis/accueil/Vector (1).png" alt="" width="50px" height="50px" style="right:0" > </a></div>

            </nav>
        </div>
    </header> --}}

<nav class="navbar navbar-expand-lg pt-0 absolute">
    <div class=" container-xl pt-0">
        <a class="navbar-brand col-xl-2 col-lg-1 ms-lg-auto" href="#">
            <x-partials.logo></x-partials.logo>
        </a>
        <div class="navbar-toggler float-right" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon" style="color:#4684BF; "></span>
        </div>
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav ms-sm-2">
                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/quisommesnous">Qui sommes-nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Réseau RAC</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Espace
                        emploi</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">CVThèque</a></li>
                        <li><a class="dropdown-item" href="#">Espace recruteur</a></li>
                        <li><a class="dropdown-item" href="#">Dépôt de CV</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown">Formation</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Formation <br> certifiante</a></li>
                        <li><a class="dropdown-item" href="#">Formation <br> gratuite</a></li>

                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown">Boutique</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Kits <br> professionnels</a></li>
                        <li><a class="dropdown-item" href="#">Livres</a></li>

                    </ul>
                </li>

            </ul>
            <a id="icon-connexion" class=" me-auto ms-sm-2"><a href="/connexion"><img src="oasis/accueil/Vector (1).png"
                        alt="" width="50px" height="50px" style="right:0;list-style:none;"> </a></a>

        </div>
    </div>
</nav>
