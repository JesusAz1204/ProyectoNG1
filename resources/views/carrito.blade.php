@extends('layouts.app')

@section('content')
    <div class="w-full h-24 bg-black"></div>

    <section class="max-w-7xl mx-auto px-6 md:px-12 py-16 min-h-screen">
        <h1 class="font-bebas text-6xl md:text-8xl uppercase text-black leading-none tracking-tight mb-12 border-b-4 border-black pb-4">
            TU <span class="text-[#ccff00] bg-black px-4">CARRITO</span>
        </h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Lista de Productos en el Carrito (2 columnas de ancho) -->
            <div class="lg:col-span-2 space-y-6">
                
                <!-- Ítem 1 -->
                <div class="flex flex-col sm:flex-row items-center justify-between bg-gray-50 p-6 border border-gray-200 gap-6">
                    <div class="flex items-center gap-6 w-full sm:w-auto">
                        <div class="w-24 h-28 bg-gray-200 flex-shrink-0 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1511886929837-354d827aae26?q=80&w=800&auto=format&fit=crop" class="object-cover w-full h-full">
                        </div>
                        <div>
                            <span class="bg-black text-[#ccff00] font-bebas text-xs px-2 py-0.5 uppercase">Exclusivo</span>
                            <h3 class="font-bebas text-3xl uppercase text-black mt-1">Predator Elite FT</h3>
                            <p class="font-inter text-sm text-gray-500">Talla: 27.5 MX | Color: Negro/Neón</p>
                            <span class="font-inter font-black text-lg text-black mt-2 block">$5,599.00</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full sm:w-auto gap-4">
                        <div class="flex items-center border border-gray-300 bg-white">
                            <button class="px-3 py-1 font-bold hover:bg-gray-100">-</button>
                            <span class="px-4 py-1 font-inter font-semibold text-sm">1</span>
                            <button class="px-3 py-1 font-bold hover:bg-gray-100">+</button>
                        </div>
                        <button class="text-gray-400 hover:text-red-600 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Ítem 2 -->
                <div class="flex flex-col sm:flex-row items-center justify-between bg-gray-50 p-6 border border-gray-200 gap-6">
                    <div class="flex items-center gap-6 w-full sm:w-auto">
                        <div class="w-24 h-28 bg-gray-200 flex-shrink-0 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1580087433295-ab2600ff5ea8?q=80&w=800&auto=format&fit=crop" class="object-cover w-full h-full">
                        </div>
                        <div>
                            <span class="bg-red-600 text-white font-bebas text-xs px-2 py-0.5 uppercase">Promo -20%</span>
                            <h3 class="font-bebas text-3xl uppercase text-black mt-1">Jersey Local 24/25</h3>
                            <p class="font-inter text-sm text-gray-500">Talla: G (Grande) | Versión Jugador</p>
                            <span class="font-inter font-black text-lg text-black mt-2 block">$2,599.00</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full sm:w-auto gap-4">
                        <div class="flex items-center border border-gray-300 bg-white">
                            <button class="px-3 py-1 font-bold hover:bg-gray-100">-</button>
                            <span class="px-4 py-1 font-inter font-semibold text-sm">1</span>
                            <button class="px-3 py-1 font-bold hover:bg-gray-100">+</button>
                        </div>
                        <button class="text-gray-400 hover:text-red-600 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>

            <!-- Resumen de Orden (1 columna de ancho) -->
            <div class="bg-black text-white p-8 border-t-4 border-[#ccff00] h-fit">
                <h3 class="font-bebas text-3xl uppercase tracking-wider mb-6">Resumen del Pedido</h3>
                
                <div class="space-y-4 font-inter text-sm border-b border-gray-800 pb-6 mb-6">
                    <div class="flex justify-between">
                        <span class="text-gray-400">Subtotal</span>
                        <span class="font-bold">$8,198.00</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-400">Envío Táctico (Nacional)</span>
                        <span class="text-[#ccff00] font-bold">GRATIS</span>
                    </div>
                </div>

                <div class="flex justify-between font-bebas text-3xl mb-8">
                    <span>Total</span>
                    <span class="text-[#ccff00]">$8,198.00</span>
                </div>

                <button class="w-full bg-[#ccff00] text-black font-bebas text-2xl py-4 uppercase tracking-wider hover:bg-white transition-colors text-center block">
                    Proceder al Pago
                </button>
            </div>
        </div>
    </section>
@endsection