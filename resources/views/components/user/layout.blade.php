@props(['title' => 'Titre', 'headerText', 'imageAccueil'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @livewireStyles
    @include('user.frontend.style')
    <title> Oasis - {{ $title }}</title>
    <style>
        .nav-bar {
            height: 650px;
            background-image: url("{{ asset('storage/library/' . $imageAccueil) }}");
            background-size: cover;
            object-fit: cover;
            background-repeat: no-repeat;
            background-position: center;

        }

        .card-1 {
            border: none !important;
            background: none !important;
        }

        .card-footer {
            background: none !important;
            border: none !important;
        }
    </style>
</head>

<body>

    @include('user.partials._header')
    {{ $slot }}


    @include('user.partials._footer')
    @include('user.frontend.script')


    @livewireScripts
</body>

</html>
