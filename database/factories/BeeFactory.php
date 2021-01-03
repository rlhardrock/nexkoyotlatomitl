<?php

namespace Database\Factories;

use App\Models\Bee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'name' => $this -> faker -> randomElement(['rusia', 'alemania','EEUU','francia', 'sudafrika', 'españa', 'inglaterra', 'australia', 'mexico','brasil', 'serbia', 'colombia']),
            'ecogeography' => $this -> faker -> randomElement(['amazonas', 'caucaso', 'urales', 'carpatos', 'patagonia', 'selva_negra','apalaches', 'yucatan', 'andes', 'polesia', 'pampa', 'glacier', 'indochina', 'escandinavia','madagascar','mediterraneo','baltico', 'balcanes', 'sahara', 'centroamerica', 'indico', 'rocallosas']),
            'ecosystem' => $this -> faker -> randomElement(['selva', 'estepa', 'sabana', 'taiga', 'bosque', 'desierto', 'manglar', 'marisma','juncal', 'paramo', 'tundra','arbustal','pradera', 'conifero','frondoso']),
            'latitude' => $this -> faker -> randomElement(['ecuatorial', 'septentrional', 'meridional', 'tropical', 'artico','antartico']),
            'weather' => $this -> faker -> randomElement(['nival', 'montano', 'alpino', 'paramo', 'basal', 'costa','templado', 'gelido', 'calido']),
            'job_function' => $this -> faker -> randomElement(['reina', 'trabajadora', 'zangano', 'solitaria','exploradora'])
        ];
    }
}
