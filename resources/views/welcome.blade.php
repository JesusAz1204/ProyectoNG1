@extends('layouts.app')

@section('content')
    <!-- HERO SECTION -->
    <section class="relative h-screen w-full flex items-center justify-center overflow-hidden bg-black">
        <!-- Imagen de Fondo (Reemplazable) -->
        <img src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?q=80&w=2000&auto=format&fit=crop" 
             alt="Fondo Fútbol" 
             class="absolute inset-0 w-full h-full object-cover object-center opacity-50 scale-105 transform transition duration-1000">
        
        <!-- Overlay oscuro para alto contraste -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/80"></div>

        <!-- Contenido Central -->
        <div class="relative z-10 text-center px-4 w-full max-w-6xl mx-auto flex flex-col items-center mt-16">
            <!-- Subtítulo -->
            <p class="font-inter font-bold text-gray-300 uppercase tracking-[0.3em] text-sm md:text-lg mb-4">
                La nueva colección ha llegado
            </p>
            
            <!-- Título Gigante -->
            <h1 class="font-bebas text-7xl md:text-9xl lg:text-[12rem] leading-none text-white uppercase tracking-tighter italic mb-8 drop-shadow-2xl">
                DESATA TU <br /> <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-500">POTENCIAL</span>
            </h1>

            <!-- Botones de Acción -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center w-full sm:w-auto">
                <!-- Botón Primario (Acento Vibrante) -->
                <a href="#" class="btn-skew bg-[#ccff00] text-black px-10 py-4 hover:bg-white hover:scale-105 transition-all duration-300 shadow-[0_0_20px_rgba(204,255,0,0.4)]">
                    <span class="btn-unskew font-bebas text-2xl tracking-widest uppercase">Ver Colección</span>
                </a>
                
                <!-- Botón Secundario (Borde Minimalista) -->
                <a href="#" class="btn-skew border-2 border-white text-white px-10 py-4 hover:bg-white hover:text-black transition-all duration-300">
                    <span class="btn-unskew font-bebas text-2xl tracking-widest uppercase">Comprar Exclusivos</span>
                </a>
            </div>
        </div>
    </section>
    <!-- SECCIÓN DE CATÁLOGO (FASE 2) -->
    <section class="max-w-7xl mx-auto px-6 md:px-12 py-24 bg-white">
        <!-- Encabezado de la sección -->
        <div class="flex justify-between items-end mb-12 border-b-4 border-black pb-4">
            <h2 class="font-bebas text-5xl md:text-7xl uppercase text-black leading-none tracking-tight">
                Nuevos <br> <span class="text-gray-400">Lanzamientos</span>
            </h2>
            <a href="#" class="hidden md:inline-block font-inter font-bold text-sm uppercase tracking-widest hover:text-[#ccff00] transition-colors">
                Ver todo ->
            </a>
        </div>

        <!-- Cuadrícula de Productos (Grid) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- TARJETA DE PRODUCTO 1 -->
            <div class="group relative flex flex-col bg-gray-50 cursor-pointer overflow-hidden border border-gray-100 hover:shadow-2xl transition-shadow duration-300">
                <!-- Imagen y Tags -->
                <div class="relative aspect-[4/5] bg-gray-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1511886929837-354d827aae26?q=80&w=800&auto=format&fit=crop" alt="Botines 1" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-700 ease-in-out">
                    <!-- Etiqueta Exclusivo -->
                    <span class="absolute top-4 left-4 bg-black text-white font-bebas text-xl px-4 py-1 tracking-wider z-10">
                        EXCLUSIVO
                    </span>
                    <!-- Botón Flotante Hover -->
                    <div class="absolute bottom-0 left-0 w-full p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-20">
                        <button class="w-full bg-[#ccff00] text-black font-bebas text-2xl py-3 hover:bg-black hover:text-white transition-colors">
                            Agregar al Carrito
                        </button>
                    </div>
                    <!-- Gradiente oscuro inferior para legibilidad del botón -->
                    <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <!-- Info del Producto -->
                <div class="p-6 flex flex-col flex-grow justify-between bg-white z-10">
                    <div>
                        <h3 class="font-bebas text-3xl uppercase text-black leading-none mb-2">Predator Elite FT</h3>
                        <p class="font-inter text-gray-500 text-sm mb-4">Fútbol de pasto natural (FG)</p>
                    </div>
                    <span class="font-inter font-black text-xl text-black">$5,599.00</span>
                </div>
            </div>

            <!-- TARJETA DE PRODUCTO 2 -->
            <div class="group relative flex flex-col bg-gray-50 cursor-pointer overflow-hidden border border-gray-100 hover:shadow-2xl transition-shadow duration-300">
                <div class="relative aspect-[4/5] bg-gray-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1614666441636-ce40af5b1d44?q=80&w=800&auto=format&fit=crop" alt="Botines 2" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-700 ease-in-out">
                    <span class="absolute top-4 left-4 bg-[#ccff00] text-black font-bebas text-xl px-4 py-1 tracking-wider z-10">
                        NUEVO
                    </span>
                    <div class="absolute bottom-0 left-0 w-full p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-20">
                        <button class="w-full bg-[#ccff00] text-black font-bebas text-2xl py-3 hover:bg-black hover:text-white transition-colors">
                            Agregar al Carrito
                        </button>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6 flex flex-col flex-grow justify-between bg-white z-10">
                    <div>
                        <h3 class="font-bebas text-3xl uppercase text-black leading-none mb-2">X Crazyfast.1</h3>
                        <p class="font-inter text-gray-500 text-sm mb-4">Terreno Firme</p>
                    </div>
                    <span class="font-inter font-black text-xl text-black">$5,299.00</span>
                </div>
            </div>

            <!-- TARJETA DE PRODUCTO 3 -->
            <div class="group relative flex flex-col bg-gray-50 cursor-pointer overflow-hidden border border-gray-100 hover:shadow-2xl transition-shadow duration-300">
                <div class="relative aspect-[4/5] bg-gray-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1575361204480-aadea25e6e68?q=80&w=800&auto=format&fit=crop" alt="Balón" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-700 ease-in-out">
                    <div class="absolute bottom-0 left-0 w-full p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-20">
                        <button class="w-full bg-[#ccff00] text-black font-bebas text-2xl py-3 hover:bg-black hover:text-white transition-colors">
                            Agregar al Carrito
                        </button>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6 flex flex-col flex-grow justify-between bg-white z-10">
                    <div>
                        <h3 class="font-bebas text-3xl uppercase text-black leading-none mb-2">UCL Pro Ball 24</h3>
                        <p class="font-inter text-gray-500 text-sm mb-4">Balón oficial de partido</p>
                    </div>
                    <span class="font-inter font-black text-xl text-black">$3,199.00</span>
                </div>
            </div>

            <!-- TARJETA DE PRODUCTO 4 -->
            <div class="group relative flex flex-col bg-gray-50 cursor-pointer overflow-hidden border border-gray-100 hover:shadow-2xl transition-shadow duration-300">
                <div class="relative aspect-[4/5] bg-gray-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1580087433295-ab2600ff5ea8?q=80&w=800&auto=format&fit=crop" alt="Jersey" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-700 ease-in-out">
                    <span class="absolute top-4 left-4 bg-red-600 text-white font-bebas text-xl px-4 py-1 tracking-wider z-10">
                        PROMO -20%
                    </span>
                    <div class="absolute bottom-0 left-0 w-full p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-20">
                        <button class="w-full bg-[#ccff00] text-black font-bebas text-2xl py-3 hover:bg-black hover:text-white transition-colors">
                            Agregar al Carrito
                        </button>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6 flex flex-col flex-grow justify-between bg-white z-10">
                    <div>
                        <h3 class="font-bebas text-3xl uppercase text-black leading-none mb-2">Jersey Local 24/25</h3>
                        <p class="font-inter text-gray-500 text-sm mb-4">Versión Jugador (HEAT.RDY)</p>
                    </div>
                    <span class="font-inter font-black text-xl text-black">$2,599.00</span>
                </div>
            </div>

        </div>
    </section>
@endsection