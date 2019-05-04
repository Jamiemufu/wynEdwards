<!DOCTYPE html>
<html lang="en">
<head>

    {{-- meta --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WynEdwards Electrical</title>
    {{-- CSS includes --}}
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
    
    <header>
        @include('includes.header')
    </header>

    <div id="main">
            @yield('content')
    </div>
       
    <footer id="footer">
        @include('includes.footer')
    </footer>
    {{-- Javascript Scripts --}}
    <script>
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: { lat: 53.0711, lng: -3.8081 },
                    scrollwheel: false,
                    zoom: 8,
                    mapTypeControl: false,
                    disableDefaultUI: true
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxjJwyNzuGN9Wg-HTZ4exFoVIr5dkFQ3k&callback=initMap" async defer></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ mix('/js/script.js') }}"></script>
</body>
</html>