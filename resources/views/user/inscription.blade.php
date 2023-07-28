<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Inscription Professionnelle</title>
</head>

<body class="h-full bg-white">

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-20 w-auto" src="{{ asset('oasis/accueil/logo Oasis Consulting 1.png') }}" alt=""
                height=";" object-fit="">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Inscrivez-vous ici
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <label for="nom" class="block text-sm font-medium leading-6 text-gray-900">Nom et
                        Prénoms</label>
                    <div class="mt-2">
                        <input id="nom" name="name" type="text" autocomplete="name" required
                            class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('name')
                            <p class="text-red-500 text-xs mc-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Identifiant</label>
                    <div class="mt-2">
                        <input id="username" name="username" type="text" autocomplete="username" required
                            class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('username')
                            <p class="text-red-500 text-xs mc-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                        address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('email')
                            <p class="text-red-500 text-xs mc-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="tel" class="block text-sm font-medium leading-6 text-gray-900">Numéro de
                        Téléphone</label>
                    <div class="mt-2">
                        <input id="tel" name="tel" type="tel" autocomplete="tel" required
                            class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('tel')
                            <p class="text-red-500 text-xs mc-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class=" px-2 block text-sm font-medium leading-6 text-gray-900">Mot de
                            passe</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('password')
                            <p class="text-red-500 text-xs mc-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="confirmPassword" class=" px-2 block text-sm font-medium  text-gray-900">Confirmer le
                            mot de passe</label>
                    </div>
                    <div class="mt-2">
                        <input id="confirmPassword" name="password_confirmation" type="password"
                            autocomplete="current-password" required
                            class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('password_confirmation')
                            <p class="text-red-500 text-xs mc-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                        in</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">OASIS Consulting
                    SARL</a>
            </p>
        </div>
    </div>

</body>

</html>
