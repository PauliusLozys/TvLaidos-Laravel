<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Tv Laidos') }}</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" media="screen" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // čia rašomas JQuery kodas
            $('#contentLeft h2').mouseover(function() { // užvedus pelyte
                $(this).css('cursor', 'pointer'); // pakeičiamas pelytės žymeklis
            });
            $().mouse
            $('#contentLeft h2').click(function() { // paspaudus contentLeft h2 elem.
                $('#contentLeft ul').slideToggle(); // slepiamas/rodomas ul meniu elem.
            });

            $('#topMenu a').mouseenter(function() {
                $(this).css( { color: "#0fe4f0" });
                console.log(this);
            });
            $('#topMenu a').mouseout(function() {
                $(this).css( { color: "#5725da" });
                console.log(this);
            });
        });
    </script>
</head>
<body>
<div id="body">
    <div id="banner">
        @yield('banner')
    </div>
    <div id="header" class="flex-container">
        <div>
            <h3 id="slogan">IMbD Tv laidų svetainė</h3>
        </div>
        <div id="image">
            <img id="logoImg" src="images/logo.png">
        </div>
    </div>

    <div id="content">
        <div id="topMenu">
            <ul>
                <li><a href="{{ url('/') }}" title="Apie mus" class="active">Apie mus</a></li>
                <li><a href="{{url('Kontaktai')}}" title="Kontaktai">Kontaktai</a></li>
            </ul>
        </div>
        <div id="contentLeft">
            <h2>Sekcija</h2>
            <ul>
                <li><a href="{{url('TvLaidos')}}">Tv Laidos</a></li>
                <li><a href="{{url('Sezonai')}}">Sezonai</a></li>
                <li><a href="{{url('Aktoriai')}}">Aktoriai</a></li>
                <li><a href="{{url('Veikejai')}}">Veikėjai</a></li>
                <li><a href="{{url('Kurejai')}}">Kūrėjai</a></li>
            </ul>
        </div>
        <div id="contentRight" @yield('contentRightParams')>
            @yield('content')
        </div>

    </div>
    <div id="footer">
        <p id="footerText">
            This is a very nice peace of text :^)
        </p>

    </div>
</div>
</body>
</html>
