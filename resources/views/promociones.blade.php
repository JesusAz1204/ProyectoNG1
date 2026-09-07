@extends('layouts.app')

@section('content')
    <div class="w-full h-24 bg-black"></div>

    <!-- Alerta de Promoción -->
    <div class="bg-[#ccff00] text-black py-4 px-6 text-center font-bebas text-xl tracking-widest uppercase">
        ⚡ ¡Rebajas de Temporada! Hasta 30% de descuento en artículos seleccionados por tiempo limitado ⚡
    </div>

    <section class="max-w-7xl mx-auto px-6 md:px-12 py-16">
        <h1 class="font-bebas text-6xl md:text-8xl uppercase text-black leading-none tracking-tight mb-12 border-b-4 border-black pb-4">
            ZONA DE <span class="text-gray-400">OFERTAS</span>
        </h1>

        <!-- Grid de Promociones -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Producto Promo 1 -->
            <div class="group relative flex flex-col bg-gray-50 cursor-pointer overflow-hidden border border-gray-100 hover:shadow-2xl transition-shadow duration-300">
                <div class="relative aspect-[4/5] bg-gray-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1614666441636-ce40af5b1d44?q=80&w=800&auto=format&fit=crop" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-700">
                    <span class="absolute top-4 left-4 bg-red-600 text-white font-bebas text-xl px-4 py-1 tracking-wider z-10">
                        -25% OFF
                    </span>
                    <div class="absolute bottom-0 left-0 w-full p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-20">
                        <button class="w-full bg-[#ccff00] text-black font-bebas text-2xl py-3 hover:bg-black hover:text-white transition-colors">
                            Agregar al Carrito
                        </button>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow justify-between bg-white z-10">
                    <div>
                        <h3 class="font-bebas text-3xl uppercase text-black leading-none mb-1">X Crazyfast.1 Turf</h3>
                        <p class="font-inter text-gray-500 text-sm mb-4">Suela para pasto sintético</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="font-inter font-black text-xl text-red-600">$3,999.00</span>
                        <span class="font-inter text-gray-400 line-through text-sm">$5,299.00</span>
                    </div>
                </div>
            </div>

            <!-- Producto Promo 2 -->
            <div class="group relative flex flex-col bg-gray-50 cursor-pointer overflow-hidden border border-gray-100 hover:shadow-2xl transition-shadow duration-300">
                <div class="relative aspect-[4/5] bg-gray-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1580087433295-ab2600ff5ea8?q=80&w=800&auto=format&fit=crop" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-700">
                    <span class="absolute top-4 left-4 bg-red-600 text-white font-bebas text-xl px-4 py-1 tracking-wider z-10">
                        -20% OFF
                    </span>
                    <div class="absolute bottom-0 left-0 w-full p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-20">
                        <button class="w-full bg-[#ccff00] text-black font-bebas text-2xl py-3 hover:bg-black hover:text-white transition-colors">
                            Agregar al Carrito
                        </button>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow justify-between bg-white z-10">
                    <div>
                        <h3 class="font-bebas text-3xl uppercase text-black leading-none mb-1">Jersey Local 24/25</h3>
                        <p class="font-inter text-gray-500 text-sm mb-4">Versión Jugador</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="font-inter font-black text-xl text-red-600">$2,079.00</span>
                        <span class="font-inter text-gray-400 line-through text-sm">$2,599.00</span>
                    </div>
                </div>
            </div>

            <!-- Producto Promo 3 -->
            <div class="group relative flex flex-col bg-gray-50 cursor-pointer overflow-hidden border border-gray-100 hover:shadow-2xl transition-shadow duration-300">
                <div class="relative aspect-[4/5] bg-gray-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1575361204480-aadea25e6e68?q=80&w=800&auto=format&fit=crop" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-700">
                    <span class="absolute top-4 left-4 bg-red-600 text-white font-bebas text-xl px-4 py-1 tracking-wider z-10">
                        -15% OFF
                    </span>
                    <div class="absolute bottom-0 left-0 w-full p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-20">
                        <button class="w-full bg-[#ccff00] text-black font-bebas text-2xl py-3 hover:bg-black hover:text-white transition-colors">
                            Agregar al Carrito
                        </button>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow justify-between bg-white z-10">
                    <div>
                        <h3 class="font-bebas text-3xl uppercase text-black leading-none mb-1">UCL Training Ball</h3>
                        <p class="font-inter text-gray-500 text-sm mb-4">Balón de entrenamiento</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="font-inter font-black text-xl text-red-600">$999.00</span>
                        <span class="font-inter text-gray-400 line-through text-sm">$1,199.00</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection