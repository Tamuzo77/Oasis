
<nav class="navbar navbar-expand-lg pt-0 absolute">
    <div class=" container-xl pt-0">
      <a class="navbar-brand col-xl-2 col-lg-1 ms-lg-auto" href="#"><x-partials.logo ></x-partials.logo></a>
      <div class="navbar-toggler float-right" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
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
            <a class="nav-link" href="reseauRac">Réseau RAC</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Espace emploi</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">CVThèque</a></li>
              <li><a class="dropdown-item" href="#">Espace recruteur</a></li>
              <li><a class="dropdown-item" href="/dépôtCV">Dépôt de CV</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Formation</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Formation <br> certifiante</a></li>
              <li><a class="dropdown-item" href="#">Formation <br> gratuite</a></li>

            </ul>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Boutique</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Kits <br> professionnels</a></li>
              <li><a class="dropdown-item" href="#">Livres</a></li>

            </ul>
          </li>

        </ul>
        <span id="icon-connexion"class="ms-auto ps-sm-2"  data-bs-toggle="modal" data-bs-target="#myModal"><img src="oasis/accueil/Vector (1).png" alt="" width="50px" height="50px" style="right:0;list-style:none;" ></span>

          <!-- The Modal -->
          <div class="modal my-5" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header ms-auto">
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="mb-3 ">
                    <form action="POST" class="">
                        <div class="mb-3 text-center">
                            <x-partials.logo ></x-partials.logo>
                        </div>
                        <div>
                            <label class="email" for="email">Email</label>
                                <br>
                            <div class="text-center">
                                <input type="email" name="email" id="email">
                                <br>
                            </div>
                            <label class="password" for="password">Mot de passe</label>
                                <br>
                            <div class="text-center">
                                <input type="password text-center" name="password" id="password">
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="mt-3 mb-4" type="submit"><a href="/accueilConnexion">Connexion</a></button>
                                <br>
                        </div>

                        <div class="text-end me-5"><a  href="">Mot de passe oublié ?</a></div>
                <div class="modal-footer"></div>

                    </form>
                </div>

              </div>
          </div>

      </div>
    </div>
  </nav>





