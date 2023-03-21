<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->withFaker()->sentence(),
            'description' => $this->withFaker()->paragraph(),
            'status' => $this->withFaker()->numberBetween(0,1),
        ];
    }
}
