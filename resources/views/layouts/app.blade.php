<!DOCTYPE html>
<html lang="es_MX">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Language" content="es-mx" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield("title")</title>
        <link rel="stylesheet" type="text/css" href="{{mix('/css/app.css')}}">
        {{-- SEO TAGS --}}
        <meta
            name="description"
            content="@yield('seo_description')"
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
            content="@yield('title')"
        />
        <meta
            property="og:description"
            content="@yield('seo_description')"
        />
        <meta property="og:url" content="http://localhost:8080" />
        <meta
            property="og:site_name"
            content="Open Blog"
        />
        <meta
            property="og:image"
            content="@yield('seo_image')"
        />
        <meta name="twitter:card" content="summary_large_image" />
        <meta
            name="twitter:description"
            content="@yield('seo_description')"
        />
        <meta
            name="twitter:title"
            content="@yield('title')"
        />

        <meta
            name="twitter:image"
            content="@yield('seo_image')"
        />
    </head>
    <body>
        <div id="app" class="side-nav-layout">
            {{-- Navbar --}}
            <nav class="sidemenu">
                <div class="user_profile">
                    <img src="https://firebasestorage.googleapis.com/v0/b/bitquark-mailer.appspot.com/o/Anuncio%20páginas%20web%20a%20medida.png?alt=media&token=c650ab98-9e3c-496a-be51-6d8e9de24edd">
                    <!-- <h6>Sábado 29 de agosto de 2020</h6> -->
                    @isset($fecha)
                        <h6>{{$fecha}}</h6>
                    @endisset
                    @guest
                        <a href="{{url('login')}}" class="font-semibold py-1 px-1 rounded shadow">
                          Iniciar sesión
                        </a>
                    @else
                        <button class="font-semibold py-1 px-1 rounded shadow">
                          Cerrar sesión
                        </button>
                    @endguest
                </div>

                <div class="links">
                    <li class="active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.453l9 8.375v9.172h-6v-6h-6v6h-6v-9.172l9-8.375zm12 5.695l-12-11.148-12 11.133 1.361 1.465 10.639-9.868 10.639 9.883 1.361-1.465z"/></svg>
                        <a href="{{url('/')}}">Inicio</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4 17.162l-2 .838v-12.972l12-5.028v2.507l-10 4.19v10.465zm18-11.162l-12 5.028v12.972l12-5.028v-12.972zm-14 3.697l10-4.19v-2.507l-12 5.028v12.972l2-.838v-10.465z"/></svg>
                        <a href="{{url('/categorias/')}}">Categorías</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.435c-1.989-5.399-12-4.597-12 3.568 0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-8.118-10-8.999-12-3.568z"/></svg>
                        <a href="#">Favoritos</a>
                    </li>
                </div>
            </nav>
            <div class="mobile-menu-overlay"></div>
            <main id="app" class="content">
                {{--
                    El yield content cubre la mayoría de elementos dentro,
                    del mismo, existirá la etiqueta `article`, lo que nos
                    permitirá mejorar la posición SEO de nuestro blog.
                --}}
                @yield("content")
            </main>
            @yield("footer")
        </div>
        <script src="{{ mix('/js/app.js') }}" defer async></script>
        <!--
            Bitquark software® - 2020
            The Open Blog Project
        -->
    </body>
</html>
