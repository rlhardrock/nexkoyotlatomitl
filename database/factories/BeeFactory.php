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
            'name' => $this -> faker -> word(),
            'ecogeography' => $this -> faker -> randomElement(['amazonas', 'caucaso', 'urales', 'carpatos', 'patagonia', 'selva_negra','apalaches', 'yucatan', 'andes']),
            'ecosystem' => $this -> faker -> randomElement(['selva', 'llanura', 'sabana', 'taiga', 'bosque', 'desierto', 'manglar']),
            'latitude' => $this -> faker -> randomElement(['ecuatorial', 'septentrional', 'meridional', 'tropical', 'polar']),
            'weather' => $this -> faker -> randomElement(['templado', 'subtropical', 'calido', 'hemiboreal', 'monzonico']),
            'job_function' => $this -> faker -> randomElement(['queen', 'worker', 'zangan', 'lonely'])
        ];
    }
}
