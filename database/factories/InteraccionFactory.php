<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InteraccionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cliente_id' => Cliente::factory(),
            'usuario_id' => User::factory(),
            'tipo' => fake()->randomElement(['llamada', 'correo', 'reunión']),
            'descripcion' => fake()->paragraph(),
            'fecha' => fake()->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
