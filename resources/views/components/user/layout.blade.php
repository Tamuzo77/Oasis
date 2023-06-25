@props(['title' => 'Titre', 'headerText'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @livewireStyles
    @include('user.frontend.style')
   <title>{{ $title }}</title>
</head>
<body>

     @include('user.partials._header') 
    {{ $slot }}
    
    @include('user.frontend.script')
    @livewireScripts
</body>
</html>
