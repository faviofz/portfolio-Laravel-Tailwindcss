<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $title = $this->faker->sentence(2, false),
            'url' => str($title)->slug(),
            'description' => "Descripcion de " . $title,
            'image' => $this->faker->imageUrl(800, 600)
        ];
    }
}
