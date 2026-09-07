<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FútbolPRO | E-commerce</title>
    
    <!-- Fuentes: Bebas Neue (Adidas) e Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;600;900&display=swap" rel="stylesheet">
    
    <!-- Compilador de Vite para Tailwind v4 -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-inter bg-white text-black antialiased overflow-x-hidden">

    <!-- BARRA DE NAVEGACIÓN (HEADER MAESTRO) -->
    <header id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300 bg-transparent text-white py-4 border-b border-transparent">
        <div class="max-w-7xl mx-auto px-6 md:px-12 flex justify-between items-center">
            
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="font-bebas text-4xl tracking-widest uppercase">
                    Choy<span class="text-[#ccff00]">ersey</span>
                </a>
            </div>

            <!-- Navegación Central -->
            <nav class="hidden md:flex gap-8">
                <a href="/" class="text-sm font-bold uppercase tracking-[0.2em] hover:text-[#ccff00] transition-colors">Inicio</a>
                <a href="/catalogo" class="text-sm font-bold uppercase tracking-[0.2em] hover:text-[#ccff00] transition-colors">Catálogo</a>
                <a href="/exclusivos" class="text-sm font-bold uppercase tracking-[0.2em] hover:text-[#ccff00] transition-colors">Exclusivos</a>
                <a href="/promociones" class="text-sm font-bold uppercase tracking-[0.2em] hover:text-[#ccff00] transition-colors">Promociones</a>
                <a href="/contacto" class="text-sm font-bold uppercase tracking-[0.2em] hover:text-[#ccff00] transition-colors">Contacto</a>
            </nav>

            <!-- Iconos Derecha -->
            <div class="flex items-center gap-6">
                <!-- Mi Perfil (Login) -->
                <a href="/login" class="hover:text-[#ccff00] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </a>
                <!-- Carrito -->
                <a href="/carrito" class="relative hover:text-[#ccff00] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    <!-- Indicador Numérico -->
                    <span class="absolute -top-2 -right-3 bg-[#ccff00] text-black text-[10px] font-bold px-1.5 py-0.5 rounded-full border-2 border-transparent">
                        2
                    </span>
                </a>
            </div>
        </div>
    </header>

    <!-- ÁREA DE INYECCIÓN DE CONTENIDO -->
    <main>
        @yield('content')
    </main>

    <!-- SCRIPT DEL HEADER -->
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.remove('bg-transparent', 'text-white', 'border-transparent');
                navbar.classList.add('bg-white', 'text-black', 'border-black');
            } else {
                navbar.classList.add('bg-transparent', 'text-white', 'border-transparent');
                navbar.classList.remove('bg-white', 'text-black', 'border-black');
            }
        });
    </script>
</body>
</html>