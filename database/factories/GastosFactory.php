<?php

namespace Database\Factories;

use App\Models\Gastos;
use Illuminate\Database\Eloquent\Factories\Factory;

class GastosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gastos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gasto' => $this->faker->name,
            'valor' => 10,
        ];
    }
}
