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
                        src="{{ asset('oasis/accueil/Vector (1).png') }}" alt="" width="50px" height="50px"
                        style="right:0;list-style:none;"></span>

                <!-- The Modal -->
                <div class="modal fade m-auto" id="myModal">
                    <div class=" modal-dialog modal-dialog-centered">
                        <div class="modal-content mx-0">

                            <!-- Modal Header -->
                            <div class="modal-header ms-auto">
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                            </div>
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" action="{{ route('login') }}" class="mb-3 w-75">
                                @csrf
                                <div class="mb-3 text-center">
                                    <x-partials.logo></x-partials.logo>
                                </div>
                                <div class="m-0">
                                    <label class="email" for="email">Identifiant ou adresse e-mail</label>
                                    <br>
                                    <div class="text-center">
                                        <input type="text" id="email" name="input_type" value="{{ old('input_type') }}" required
                                            autofocus autocomplete="username" class="w-100">
                                        <br>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                    </div>
                                    <label class="password" for="password">Mot de passe</label>
                                    <br>
                                    <div class="text-center pwd">
                                        <input type="password" name="password" id="password" class="w-100" required
                                            autocomplete="current-password">
                                        <span class="eye" onclick="myFunction()">
                                            <i id="hide1" class="fa fa-eye"></i>
                                            <i id="hide2" class="fas fa-eye-slash"></i>
                                        </span>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                    </div>
                                    <div>
                                        <input type="checkbox" name="remember" id="remember_me"> <span>Se souvenir
                                            de moi</span>
                                    </div>
                                </div>
                                <div class="text-center button">
                                    <button class="mt-4 mb-3 w-100 m-0 text-white" type="submit">Se
                                            connecter
                                    </button>
                                    <br>
                                </div>

                                <div class="text-center mx-0 mb-4"><a href="{{ route('register') }}">Inscription </a>
                                </div>
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
