@extends('layouts.app')

@section('content')
    <div class="w-full h-24 bg-black"></div>

    <section class="max-w-7xl mx-auto px-6 md:px-12 py-12">
        <!-- Encabezado de la página -->
        <h1 class="font-bebas text-6xl md:text-8xl uppercase text-black leading-none tracking-tight mb-12 border-b-4 border-black pb-4">
            NUESTRO <span class="text-[#ccff00] bg-black px-4">CATÁLOGO</span>
        </h1>

        <div class="flex flex-col lg:flex-row gap-10">
            <!-- Sidebar de Filtros -->
            <aside class="w-full lg:w-1/4">
                <div class="bg-gray-50 p-6 border border-gray-200 sticky top-32">
                    <h3 class="font-bebas text-3xl uppercase mb-6 text-black">Filtros</h3>
                    
                    <div class="mb-6">
                        <h4 class="font-inter font-bold text-sm uppercase tracking-widest text-gray-500 mb-3">Categoría</h4>
                        <ul class="font-inter space-y-3 text-sm text-black">
                            <li><label class="flex items-center cursor-pointer hover:text-[#ccff00] transition-colors"><input type="checkbox" class="mr-3 w-4 h-4 accent-black"> Botines FG (Pasto Natural)</label></li>
                            <li><label class="flex items-center cursor-pointer hover:text-[#ccff00] transition-colors"><input type="checkbox" class="mr-3 w-4 h-4 accent-black"> Turf / Multitaco</label></li>
                            <li><label class="flex items-center cursor-pointer hover:text-[#ccff00] transition-colors"><input type="checkbox" class="mr-3 w-4 h-4 accent-black"> Jerseys Oficiales</label></li>
                            <li><label class="flex items-center cursor-pointer hover:text-[#ccff00] transition-colors"><input type="checkbox" class="mr-3 w-4 h-4 accent-black"> Accesorios</label></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-inter font-bold text-sm uppercase tracking-widest text-gray-500 mb-3">Marca</h4>
                        <ul class="font-inter space-y-3 text-sm text-black">
                            <li><label class="flex items-center cursor-pointer hover:text-[#ccff00] transition-colors"><input type="checkbox" class="mr-3 w-4 h-4 accent-black"> Adidas</label></li>
                            <li><label class="flex items-center cursor-pointer hover:text-[#ccff00] transition-colors"><input type="checkbox" class="mr-3 w-4 h-4 accent-black"> Nike</label></li>
                            <li><label class="flex items-center cursor-pointer hover:text-[#ccff00] transition-colors"><input type="checkbox" class="mr-3 w-4 h-4 accent-black"> Puma</label></li>
                        </ul>
                    </div>
                </div>
            </aside>

            <!-- Grid de Productos -->
            <div class="w-full lg:w-3/4 grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                <!-- Tarjeta 1 -->
                <div class="group relative flex flex-col bg-gray-50 cursor-pointer overflow-hidden border border-gray-100 hover:shadow-2xl transition-shadow duration-300">
                    <div class="relative aspect-[4/5] bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1511886929837-354d827aae26?q=80&w=800&auto=format&fit=crop" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-700 ease-in-out">
                        <div class="absolute bottom-0 left-0 w-full p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-20">
                            <button class="w-full bg-[#ccff00] text-black font-bebas text-2xl py-3 hover:bg-black hover:text-white transition-colors">Agregar</button>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow justify-between bg-white z-10">
                        <div>
                            <h3 class="font-bebas text-3xl uppercase text-black leading-none mb-1">Predator Elite FT</h3>
                            <p class="font-inter text-gray-500 text-sm mb-4">Adidas</p>
                        </div>
                        <span class="font-inter font-black text-xl text-black">$5,599.00</span>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="group relative flex flex-col bg-gray-50 cursor-pointer overflow-hidden border border-gray-100 hover:shadow-2xl transition-shadow duration-300">
                    <div class="relative aspect-[4/5] bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1614666441636-ce40af5b1d44?q=80&w=800&auto=format&fit=crop" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-700 ease-in-out">
                        <div class="absolute bottom-0 left-0 w-full p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-20">
                            <button class="w-full bg-[#ccff00] text-black font-bebas text-2xl py-3 hover:bg-black hover:text-white transition-colors">Agregar</button>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow justify-between bg-white z-10">
                        <div>
                            <h3 class="font-bebas text-3xl uppercase text-black leading-none mb-1">X Crazyfast.1</h3>
                            <p class="font-inter text-gray-500 text-sm mb-4">Adidas</p>
                        </div>
                        <span class="font-inter font-black text-xl text-black">$5,299.00</span>
                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="group relative flex flex-col bg-gray-50 cursor-pointer overflow-hidden border border-gray-100 hover:shadow-2xl transition-shadow duration-300">
                    <div class="relative aspect-[4/5] bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1580087433295-ab2600ff5ea8?q=80&w=800&auto=format&fit=crop" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-700 ease-in-out">
                        <span class="absolute top-4 left-4 bg-[#ccff00] text-black font-bebas text-xl px-4 py-1 tracking-wider z-10">NUEVO</span>
                        <div class="absolute bottom-0 left-0 w-full p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-20">
                            <button class="w-full bg-[#ccff00] text-black font-bebas text-2xl py-3 hover:bg-black hover:text-white transition-colors">Agregar</button>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow justify-between bg-white z-10">
                        <div>
                            <h3 class="font-bebas text-3xl uppercase text-black leading-none mb-1">Jersey Local 24/25</h3>
                            <p class="font-inter text-gray-500 text-sm mb-4">Versión Jugador</p>
                        </div>
                        <span class="font-inter font-black text-xl text-black">$2,599.00</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection