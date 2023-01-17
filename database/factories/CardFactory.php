<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\desklist;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'desklist_id' => desklist::inRandomOrder()->first()->id
        ];
    }
}
