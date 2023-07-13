<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Route>
 */
class RouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake() -> company(),
            'stazione_partenza' => fake() -> city(),
            'stazione_arrivo' => fake() -> city(),
            'orario_partenza' => fake() -> dateTime(),
            'orario_arrivo' => fake() -> dateTime(),
            'codice' => fake() -> unique() -> numerify('###############'),
            'n_carrozze' => fake() -> numberBetween(1, 100),
            'in_orario' => fake() -> boolean(),
            'cancellato' => fake() -> boolean()
        ];
    }
}

