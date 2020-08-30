<!DOCTYPE html>
<html lang="es_MX">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Language" content="es-mx" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield("title")</title>
        <link rel="stylesheet" type="text/css" href="{{mix('/css/app.css')}}">
        <script src="{{ mix('/js/app.js') }}"></script>

        {{-- SEO TAGS --}}
        <meta
            name="description"
            content="{{@yield('seo_description')}}"
        />
        <meta
            name="keywords"
            content="Blog, noticias del momento, últimas noticias, código abierto, open source"
        />
        <meta name="robots" content="index,follow" />
        <meta property="og:locale" content="es_MX" />
        <meta property="og:type" content="website" />
        <meta
            property="og:title"
            content="{{@yield('title')}}"
        />
        <meta
            property="og:description"
            content="{{@yield('seo_description')}}"
        />
        <meta property="og:url" content="http://localhost:8080" />
        <meta
            property="og:site_name"
            content="Open Blog"
        />
        <meta
            property="og:image"
            content="{{@yield('seo_image')}}"
        />
        <meta name="twitter:card" content="summary_large_image" />
        <meta
            name="twitter:description"
            content="{{@yield('seo_description')}}"
        />
        <meta
            name="twitter:title"
            content="{{@yield('title')}}"
        />

        <meta
            name="twitter:image"
            content="{{@yield('seo_image')}}"
        />
    </head>
    <body>
        @yield("navigation")
        <main>
            {{--
                El yield content cubre la mayoría de elementos dentro,
                del mismo, existirá la etiqueta `article`, lo que nos
                permitirá mejorar la posición SEO de nuestro blog.
            --}}
            @yield("content")
        </main>
        @yield("footer")
        <!--
            Bitquark software® - 2020
            The Open Blog Proyect
        -->
    </body>
</html>
