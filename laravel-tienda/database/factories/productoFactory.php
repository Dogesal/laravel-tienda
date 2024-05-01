<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\producto;

/**
 * 
 */
class productoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=producto::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->randomElement(['producto1','producto2','producto3','producto4','producto5','producto6','producto7','producto8']),
            'precio' => $this->faker->randomFloat(1, 1, 30),
            'cantidad' => $this->faker->numberBetween(0, 100),
            'fecha_entrega' => $this->faker->date(),
            'fecha_exp' => $this->faker->dateTimeInInterval('+1 years', '+3 days'),
        ];
    }
}
