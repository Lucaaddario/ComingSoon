<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Il sito dedicato alla raccolta Serie TV, Anime e Film">
    <title>Coming Soon</title>

    <!-- CDN FONTS -->

    <!-- FAVICON -->

    {{-- VITE APPS LINK  --}}
    @vite (['resources/css/app.css' , 'resources/js/app.js'])
</head>

<body>
<x-navbar/>


 {{-- Comunica al componente che deve mettere il codice che ha all'interno qui  --}}
 {{$slot}}



 <script src="https://kit.fontawesome.com/da62544cc1.js" crossorigin="anonymous"></script>
</body>
</html>