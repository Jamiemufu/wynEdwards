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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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