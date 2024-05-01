<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\>
 */
class usuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    protected $model=usuario::class;

    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name(),
            'correo'=>$this->faker->email(),
            'contrasenia'=>$this->faker->password(),
        ];
    }

    

    
}
