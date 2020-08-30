@extends('layouts.app')

{{-- Etiquetas SEO --}}
@section("title", "Open Blog - Open Source Blog")
@section("seo_description", "Open Blog es un proyecto de código abierto para poder tener un blog con el menor esfuerzo posible")
@section("seo_image", "https://firebasestorage.googleapis.com/v0/b/bitquark-mailer.appspot.com/o/Anuncio%20páginas%20web%20a%20medida.png?alt=media&token=c650ab98-9e3c-496a-be51-6d8e9de24edd")

{{-- Contenido de la página principal --}}
@section('content')
<nav class="in-content-navigation">
	<button class="menu-icon">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/></svg>
	</button>
	<div class="welcome-text">
		{{-- Este texto dirá ¡Bienvenido [USER]! --}}
		<p>¡Bienvenido, <span>invitado</span>!</p>
	</div>
	<div class="searchbar">
		<input type="search" placeholder="Busca algo interesante...">
		<button>
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.832 19.641l-6.821-6.821c2.834-5.878-1.45-12.82-8.065-12.82-4.932 0-8.946 4.014-8.946 8.947 0 6.508 6.739 10.798 12.601 8.166l6.879 6.879c1.957.164 4.52-2.326 4.352-4.351zm-14.886-4.721c-3.293 0-5.973-2.68-5.973-5.973s2.68-5.973 5.973-5.973c3.294 0 5.974 2.68 5.974 5.973s-2.68 5.973-5.974 5.973z"/></svg>
		</button>
	</div>
</nav>
@endsection