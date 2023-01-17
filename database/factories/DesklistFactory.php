<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\desk;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\desklist>
 */
class DesklistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'desk_id' => desk::inRandomOrder()->first()->id
        ];
    }
}
