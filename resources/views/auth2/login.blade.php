<x-user.layout title="Authentification">
    <div class="div-form pt-4">
        <form action="POST" class="pb-5 mt-5 form-connexion">
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
                <button class="mt-3 mb-4 " type="submit">Connexion</button>
                    <br>
            </div>

            <div class="text-end me-5"><a  href="">Mot de passe oublié ?</a></div>


        </form>
    </div>
</x-user.layout>