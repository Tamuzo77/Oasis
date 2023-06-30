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

            @if (!auth()->user())
                <span id="icon-connexion"class="ms-auto ps-sm-2" data-bs-toggle="modal" data-bs-target="#myModal"><img
                        src="oasis/accueil/Vector (1).png" alt="" width="50px" height="50px"
                        style="right:0;list-style:none;"></span>

                <!-- The Modal -->
                <div class="modal m-auto mt-5" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content mx-0">

                            <!-- Modal Header -->
                            <div class="modal-header ms-auto">
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                            </div>

                            <form action="POST" class="mb-3 w-75">
                                <div class="mb-3 text-center">
                                    <x-partials.logo></x-partials.logo>
                                </div>
                                <div class="m-0">
                                    <label class="email" for="email">Identifiant ou adresse e-mail</label>
                                    <br>
                                    <div class="text-center">
                                        <input type="email" name="email" id="email" placeholder="oasis"
                                            class="w-100">
                                        <br>
                                    </div>
                                    <label class="password" for="password">Mot de passe</label>
                                    <br>
                                    <div class="text-center d-flex align-items-center div-pwd">
                                        <input class="w-75" type="password text-center" name="password" id="password"
                                            placeholder="rfrt4e3">
                                        <i class="fa-solid fa-eye w-25" onclick="myFunction()"></i>

                                    </div>
                                    <div>
                                        <input type="checkbox" name="" id=""> <span>Se souvenir de
                                            moi</span>

                                    </div>
                                </div>
                                <div class="text-center button">
                                    <button class="mt-4 mb-3 w-100 m-0" type="submit"><a href="/accueilConnexion">Se
                                            connecter</a></button>
                                    <br>
                                </div>

                                <div class="text-center mx-0 mb-4"><a href="{{ route('register') }}">Inscription </a>| Mot de passe
                                        oublié?</div>
                                <div class="modal-footer"></div>

                            </form>


                        </div>
                    </div>

                </div>
            @endif
            @if (auth()->user())
                <ul class="navbar-nav ms-auto ps-sm-2">
                    <x-user.nav-item title="{{ auth()->user()->username }}" :toggled="true">
                        @if (auth()->user()->hasRole('Super Admin'))
                        <x-user.nav-sub-link title="Admin Dashboard" href="/admin/dashboard" />

                        @endif
                        <x-user.nav-sub-link title="Profile" href="" />
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item d-flex align-items-center" type="submit">
                                    <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>Sign
                                Out
                                </button>
                            </form>
                        </li>
                        
                    </x-user.nav-item>
                </ul>
            @endif


        </div>
    </div>
</nav>
