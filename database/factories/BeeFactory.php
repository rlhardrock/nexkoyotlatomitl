<?php

namespace Database\Factories;

use App\Models\Bee;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this -> faker -> sentence(),
            'ecogeography' => $this -> faker -> paragraph(),
            'ecosystem' => $this -> faker -> sentence(),
            'latitude' => $this -> faker -> randomElement(['ecuatorial', 'septentrional', 'meridional', 'tropical', 'polar']),
            'weather' => $this -> faker -> sentence()
            //'jeraquia' => $this -> faker -> randomElement(['queen', 'worker', 'zangan', 'lonely'])
        ];
    }
}
