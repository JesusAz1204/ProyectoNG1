@extends('layouts.app')

@section('content')
    <!-- Espaciador oscuro para el menú -->
    <div class="w-full h-24 bg-black"></div>

    <section class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white p-10 shadow-2xl border-t-4 border-[#ccff00]">
            <div>
                <h2 class="mt-2 text-center text-5xl font-bebas font-extrabold text-black uppercase tracking-wider">
                    INICIA <span class="text-gray-400">SESIÓN</span>
                </h2>
                <p class="mt-2 text-center text-sm font-inter text-gray-600">
                    Accede a tus pedidos y lanzamientos exclusivos.
                </p>
            </div>
            
            <form class="mt-8 space-y-6" action="#" method="POST">
                <div class="space-y-4">
                    <div>
                        <label for="email-address" class="block font-inter text-sm font-bold text-black mb-1">Correo Electrónico</label>
                        <input id="email-address" name="email" type="email" required class="appearance-none relative block w-full px-4 py-4 border border-gray-300 placeholder-gray-400 text-black focus:outline-none focus:ring-1 focus:ring-black focus:border-black sm:text-sm font-inter transition-colors" placeholder="tu@correo.com">
                    </div>
                    <div>
                        <label for="password" class="block font-inter text-sm font-bold text-black mb-1">Contraseña</label>
                        <input id="password" name="password" type="password" required class="appearance-none relative block w-full px-4 py-4 border border-gray-300 placeholder-gray-400 text-black focus:outline-none focus:ring-1 focus:ring-black focus:border-black sm:text-sm font-inter transition-colors" placeholder="••••••••">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-black focus:ring-black border-gray-300 accent-black">
                        <label for="remember-me" class="ml-2 block text-sm font-inter text-gray-900"> Recordarme </label>
                    </div>
                    <div class="text-sm">
                        <a href="#" class="font-inter font-bold text-black hover:text-[#ccff00] transition-colors">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-4 px-4 border border-transparent text-2xl font-bebas uppercase text-black bg-[#ccff00] hover:bg-black hover:text-white transition-colors duration-300 btn-skew">
                        <span class="btn-unskew">ENTRAR AL CAMPO</span>
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection