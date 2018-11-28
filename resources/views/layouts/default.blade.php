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
       
    <footer>
        @include('includes.footer')
    </footer>
    {{-- Javascript Scripts --}}
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ mix('/js/script.js') }}"></script>
</body>
</html>