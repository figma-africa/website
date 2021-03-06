<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Figma Africa is a community of web designers and other creatives, our events and activities are designed to enhance learning and understanding of design while bringing together members in the community into a physical or virtual space for them to connect and network." />
        <link rel="icon" href="/images/logo.png" type="image/png"/>
        <meta http-equiv="Cache-control" content="public" />
        <meta property="og:image" content="/images/ogimage.jpeg"/>
        <meta property="og:title" content="Figmaafrica Design Community"/>
        <meta property="og:description" content="Figma Africa is a community of web designers and other creatives, our events and activities are designed to enhance learning and understanding of design while bringing together members in the community into a physical or virtual space for them to connect and network." />
        <meta property="og:url" content="https://figmaafrica.com"/>
        <meta property="og:site_name" content="Figmaafrica.com"/>

        <title>Figma Africa Website</title>

        {{-- CSS files --}}
        <link href="/css/app.css?v=feb_15" rel="stylesheet" />
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
    <script src="/js/app.js?v=feb_15"></script>

</html>