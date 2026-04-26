<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/global/page-transition' ); ?>

<div id="page" class="site">
	<!-- 
	  ========================================
	  FLOATING HEADER
	  ========================================
	-->
	<header id="main-header" class="fixed top-6 left-0 right-0 z-50 px-4 flex justify-center transition-all duration-300">
		<div class="w-full max-w-6xl bg-white shadow-[0_8px_30px_rgb(0,0,0,0.08)] rounded-full px-6 py-3 flex justify-between lg:grid lg:grid-cols-3 items-center border border-gray-100">
			
			<!-- 1. IZQUIERDA: Logo -->
			<div class="flex items-center gap-2 justify-self-start cursor-pointer group" onclick="scrollToSection('#inicio')">
				<div class="w-9 h-9 rounded-full bg-primary flex items-center justify-center text-white transition-transform group-hover:scale-110">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
					</svg>
				</div>
				<span class="font-display font-bold text-xl text-primary tracking-tight">
					Dr. Cabello
				</span>
			</div>

			<!-- 2. CENTRO: Menú de Navegación por Secciones -->
			<nav class="hidden lg:flex items-center justify-self-center gap-2">
				<a href="#inicio" data-target="inicio" class="nav-link active">
					Inicio
				</a>
				<a href="#tratamientos" data-target="tratamientos" class="nav-link">
					Tratamientos
				</a>
				<a href="#nosotros" data-target="nosotros" class="nav-link">
					Nosotros
				</a>
				<a href="#contacto" data-target="contacto" class="nav-link">
					Contacto
				</a>
			</nav>

			<!-- 3. DERECHA: Redes Sociales / Hamburger -->
			<div class="flex items-center gap-4 justify-self-end">
				<!-- Social Media - Hidden on retracted/mobile -->
				<div class="hidden lg:flex items-center gap-4 text-gray-400 header-socials transition-all duration-300">
					<!-- Instagram -->
					<a href="#" class="hover:text-pink-500 transition-colors">
						<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
					</a>
					<!-- Facebook -->
					<a href="#" class="hover:text-blue-600 transition-colors">
						<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
					</a>
					<!-- WhatsApp -->
					<a href="#" class="hover:text-green-500 transition-colors">
						<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
					</a>
				</div>

				<!-- Hamburger Button -->
				<button id="mobile-menu-toggle" class="flex lg:hidden flex-col gap-1.5 p-2 focus:outline-none group">
					<span class="w-6 h-0.5 bg-primary rounded-full transition-all duration-300 group-[.is-active]:rotate-45 group-[.is-active]:translate-y-2"></span>
					<span class="w-6 h-0.5 bg-primary rounded-full transition-all duration-300 group-[.is-active]:opacity-0"></span>
					<span class="w-6 h-0.5 bg-primary rounded-full transition-all duration-300 group-[.is-active]:-rotate-45 group-[.is-active]:-translate-y-2"></span>
				</button>
			</div>
		</div>

	</header>

	<!-- Mobile Menu Overlay (Moved outside header to avoid scroll bugs) -->
	<div id="mobile-menu" class="fixed inset-0 bg-gray-900 z-[100] flex flex-col translate-x-full transition-transform duration-500 lg:hidden">
		
		<!-- Mobile Menu Header -->
		<div class="flex justify-between items-center px-8 py-8 border-b border-white/5">
			<div class="flex items-center gap-2">
				<div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white">
					<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
					</svg>
				</div>
				<span class="font-display font-bold text-xl text-white tracking-tight">
					Dr. Cabello
				</span>
			</div>
			<button id="mobile-menu-close" class="text-white hover:text-primary transition-colors">
				<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
			</button>
		</div>

		<!-- Mobile Menu Body -->
		<nav class="flex-1 flex flex-col px-8 mt-4">
			<a href="#inicio" class="mobile-nav-link py-6 text-3xl font-display font-bold text-white border-b border-white/5 hover:text-primary transition-colors">
				Inicio
			</a>
			<a href="#tratamientos" class="mobile-nav-link py-6 text-3xl font-display font-bold text-white border-b border-white/5 hover:text-primary transition-colors">
				Tratamientos
			</a>
			<a href="#nosotros" class="mobile-nav-link py-6 text-3xl font-display font-bold text-white border-b border-white/5 hover:text-primary transition-colors">
				Nosotros
			</a>
			<a href="#contacto" class="mobile-nav-link py-6 text-3xl font-display font-bold text-white border-b border-white/5 hover:text-primary transition-colors">
				Contacto
			</a>
		</nav>

		<!-- Mobile Menu Footer -->
		<div class="px-8 py-12 mt-auto flex justify-between items-end">
			<a href="#contacto" class="bg-primary hover:bg-primary-light text-white px-7 py-3.5 rounded-2xl font-bold text-base shadow-primary-glow transition-all active:scale-95">
				Reservar Cita
			</a>
			
			<div class="flex bg-gray-900/60 border border-white/5 rounded-2xl p-1.5 backdrop-blur-sm">
				<a href="#" class="w-11 h-11 rounded-xl flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition-all">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
				</a>
				<a href="#" class="w-11 h-11 rounded-xl flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition-all">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
				</a>
				<a href="#" class="w-11 h-11 rounded-xl flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition-all">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
				</a>
			</div>
		</div>

	</div>
