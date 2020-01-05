<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Figma Africa is a community of web designers and other creatives, our events and activities are designed to enhance learning and understanding of design while bringing together members in the community into a physical or virtual space for them to connect and network.">
        <link rel="icon" href="/images/logo.png" type="image/png"/>

        <title>Figma Africa Website</title>

        {{-- CSS files --}}
        <link href="/css/app.css?v=jan_20" rel="stylesheet" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154867932-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-154867932-1');
        </script>

    </head>
    <body>
        @yield('content')
    </body>
    <script src="/js/app.js?v=jan_20"></script>

</html>