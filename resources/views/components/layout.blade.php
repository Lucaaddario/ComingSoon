<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Il sito dedicato alla raccolta Serie TV, Anime e Film">
    <title>Coming Soon</title>

    <!-- CDN FONTS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <!-- FAVICON -->

    {{-- VITE APPS LINK  --}}
    @vite (['resources/css/app.css' , 'resources/js/app.js'])
    @if (Route::is('welcome'))
    @vite (['resources/css/app.css' , 'resources/js/main.js'])
    @endif
    @if (Route::is('films_index'))
    @vite (['resources/css/app.css' , 'resources/js/films_index.js'])
    @endif
</head>

<body>
    <x-navbar/>


    {{-- Comunica al componente che deve mettere il codice che ha all'interno qui  --}}
    {{$slot}}



    <script src="https://kit.fontawesome.com/da62544cc1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>