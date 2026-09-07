<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'correo' => fake()->unique()->safeEmail(),
            'telefono' => fake()->phoneNumber(),
            'empresa' => fake()->optional(0.7)->company(), // 70% probabilidad de tener empresa
            'fecha_registro' => fake()->dateTimeThisYear(),
            'estado' => fake()->boolean(80), // 80% probabilidad de ser activo
            'etapa_crm' => fake()->randomElement(['Prospecto', 'Activo', 'Frecuente', 'Inactivo']),
        ];
    }
}