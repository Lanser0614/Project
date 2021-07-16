<?php

namespace Database\Factories;

use App\Models\teecher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeecherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = teecher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_teecher' => $this->faker->name(),
            'name_scencie' => $this->faker->state(),
        ];
    }
}
