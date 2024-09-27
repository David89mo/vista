<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mascota;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName(),
            'especie' => $this->faker->randomElement(['Perro', 'Gato', 'Ave', 'Reptil', 'Roedor']),
            'color' => $this->faker->randomElement(['blanco', 'cafe', 'gris', 'marron', 'negro']),
            'edad' => $this->faker->numberBetween(1, 15), // Example of random age between 1 and 15
            'sexo' => $this->faker->randomElement(['Macho', 'Hembra']),
            'propietario' => $this->faker->name(),
            'telefono' => $this->faker->phoneNumber(),
        ];
    }
}
