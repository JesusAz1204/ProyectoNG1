@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-black px-4">
    <div class="max-w-md w-full bg-white p-8 border border-gray-100 shadow-2xl relative">
        <!-- Encabezado -->
        <div class="text-center mb-8">
            <h2 class="font-bebas text-5xl uppercase text-black tracking-tight">Iniciar <span class="text-[#ccff00]">Sesión</span></h2>
            <p class="font-inter text-gray-500 text-sm mt-2">Accede al panel de administración y CRM</p>
        </div>

        <!-- Alerta de errores de validación -->
        @if ($errors->any())
            <div class="mb-4 bg-red-50 border-l-4 border-red-600 p-4 text-red-700 font-inter text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario -->
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <div>
                <label class="block font-inter font-bold text-xs uppercase tracking-wider text-black mb-2">Correo Electrónico</label>
                <input type="email" name="email" required value="{{ old('email') }}" 
                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 focus:border-black focus:outline-none font-inter text-sm text-black transition-colors"
                    placeholder="admin@choyersey.com">
            </div>

            <div>
                <label class="block font-inter font-bold text-xs uppercase tracking-wider text-black mb-2">Contraseña</label>
                <input type="password" name="password" required 
                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 focus:border-black focus:outline-none font-inter text-sm text-black transition-colors"
                    placeholder="••••••••">
            </div>

            <button type="submit" 
                class="w-full bg-[#ccff00] text-black font-bebas text-2xl py-4 hover:bg-black hover:text-white transition-all duration-300 shadow-md">
                Entrar al Sistema
            </button>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ url('/') }}" class="font-inter text-xs uppercase tracking-widest text-gray-400 hover:text-black transition-colors">
                ← Volver al inicio
            </a>
        </div>
    </div>
</div>
@endsection