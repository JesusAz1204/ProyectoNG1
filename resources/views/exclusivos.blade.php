@extends('layouts.app')

@section('content')
    <div class="w-full h-24 bg-black"></div>

    <!-- Banner Superior Exclusivos -->
    <div class="bg-black text-white py-16 px-6 md:px-12 border-b border-gray-800">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            <div>
                <span class="text-[#ccff00] font-bebas text-xl uppercase tracking-widest">Lanzamientos Limitados</span>
                <h1 class="font-bebas text-6xl md:text-8xl uppercase tracking-tight mt-1">
                    EDICIÓN <span class="text-[#ccff00]">COLECCIONISTA</span>
                </h1>
            </div>
            <p class="font-inter text-gray-400 max-w-md text-sm leading-relaxed">
                Artículos numerados de producción ultra limitada. Diseñados para profesionales y coleccionistas que buscan exclusividad absoluta en el campo.
            </p>
        </div>
    </div>

    <!-- Grid de Exclusivos -->
    <section class="max-w-7xl mx-auto px-6 md:px-12 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Producto Exclusivo 1 -->
            <div class="group relative flex flex-col bg-gray-50 cursor-pointer overflow-hidden border border-gray-200">
                <div class="relative aspect-[16/9] bg-gray-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1511886929837-354d827aae26?q=80&w=1000&auto=format&fit=crop" class="object-cover w-full h-full transform group-hover:scale-105 transition-transform duration-700">
                    <span class="absolute top-4 left-4 bg-black text-[#ccff00] font-bebas text-xl px-4 py-1 tracking-wider z-10 border border-[#ccff00]/30">
                        SOLO 500 PARES EN EL MUNDO
                    </span>
                </div>
                <div class="p-8 flex flex-col justify-between bg-white flex-grow">
                    <div>
                        <h3 class="font-bebas text-4xl uppercase text-black mb-2">Predator Gold Edition Vault</h3>
                        <p class="font-inter text-gray-600 text-sm mb-6">Acabados en detalles dorados de 24k sobre la suela Controlframe y piel sintética Hybridtouch de alta gama.</p>
                    </div>
                    <div class="flex justify-between items-center border-t border-gray-100 pt-4">
                        <span class="font-inter font-black text-2xl text-black">$7,999.00</span>
                        <button class="bg-black text-[#ccff00] font-bebas text-xl px-6 py-2 hover:bg-[#ccff00] hover:text-black transition-colors">
                            Reservar Par
                        </button>
                    </div>
                </div>
            </div>

            <!-- Producto Exclusivo 2 -->
            <div class="group relative flex flex-col bg-gray-50 cursor-pointer overflow-hidden border border-gray-200">
                <div class="relative aspect-[16/9] bg-gray-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1575361204480-aadea25e6e68?q=80&w=1000&auto=format&fit=crop" class="object-cover w-full h-full transform group-hover:scale-105 transition-transform duration-700">
                    <span class="absolute top-4 left-4 bg-black text-[#ccff00] font-bebas text-xl px-4 py-1 tracking-wider z-10 border border-[#ccff00]/30">
                        SERIE NUMERADA
                    </span>
                </div>
                <div class="p-8 flex flex-col justify-between bg-white flex-grow">
                    <div>
                        <h3 class="font-bebas text-4xl uppercase text-black mb-2">UCL Final Match Ball Collector</h3>
                        <p class="font-inter text-gray-600 text-sm mb-6">El esférico oficial de la gran final con estuche de presentación acrílico y certificado de autenticidad firmado.</p>
                    </div>
                    <div class="flex justify-between items-center border-t border-gray-100 pt-4">
                        <span class="font-inter font-black text-2xl text-black">$4,899.00</span>
                        <button class="bg-black text-[#ccff00] font-bebas text-xl px-6 py-2 hover:bg-[#ccff00] hover:text-black transition-colors">
                            Reservar Par
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection