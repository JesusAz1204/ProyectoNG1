@extends('layouts.app')

@section('content')
    <div class="w-full h-24 bg-black"></div>

    <section class="max-w-7xl mx-auto px-6 md:px-12 py-24 min-h-screen grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
        
        <!-- Información -->
        <div>
            <h1 class="font-bebas text-6xl md:text-8xl uppercase text-black leading-none tracking-tight mb-8">
                HABLA CON <br><span class="text-gray-400">NOSOTROS</span>
            </h1>
            <p class="font-inter text-gray-600 text-lg mb-10 leading-relaxed">
                ¿Dudas con tu pedido, necesitas asesoría sobre tallas o buscas un artículo que no está en el catálogo? Mándanos un mensaje y nuestro equipo táctico te responderá de inmediato.
            </p>
            
            <div class="space-y-6 font-inter">
                <div>
                    <h4 class="font-bold text-black uppercase tracking-widest text-sm mb-1">Correo de Soporte</h4>
                    <p class="text-gray-500">contacto@choyersey.test</p>
                </div>
                <div>
                    <h4 class="font-bold text-black uppercase tracking-widest text-sm mb-1">Línea Directa</h4>
                    <p class="text-gray-500">+52 449 123 4567</p>
                </div>
                <div>
                    <h4 class="font-bold text-black uppercase tracking-widest text-sm mb-1">Ubicación</h4>
                    <p class="text-gray-500">Aguascalientes, México</p>
                </div>
            </div>
        </div>

        <!-- Formulario -->
        <form class="bg-gray-50 p-8 md:p-12 border border-gray-200 shadow-xl space-y-6">
            <div>
                <label class="block font-inter text-sm font-bold text-black mb-2">Nombre Completo</label>
                <input type="text" placeholder="Ej. Juan Pérez" class="w-full px-4 py-4 border border-gray-300 focus:outline-none focus:border-black focus:ring-1 focus:ring-black font-inter">
            </div>
            <div>
                <label class="block font-inter text-sm font-bold text-black mb-2">Correo Electrónico</label>
                <input type="email" placeholder="tu@correo.com" class="w-full px-4 py-4 border border-gray-300 focus:outline-none focus:border-black focus:ring-1 focus:ring-black font-inter">
            </div>
            <div>
                <label class="block font-inter text-sm font-bold text-black mb-2">Mensaje</label>
                <textarea rows="5" placeholder="¿En qué te podemos ayudar?" class="w-full px-4 py-4 border border-gray-300 focus:outline-none focus:border-black focus:ring-1 focus:ring-black font-inter resize-none"></textarea>
            </div>
            <button type="button" class="w-full btn-skew bg-black text-[#ccff00] px-10 py-5 hover:bg-[#ccff00] hover:text-black transition-colors duration-300 mt-4">
                <span class="btn-unskew font-bebas text-2xl tracking-widest uppercase">ENVIAR MENSAJE</span>
            </button>
        </form>

    </section>
@endsection