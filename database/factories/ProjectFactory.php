<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Storage;
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
            'image' => Storage::putFile('images', $this->faker->image(null, 800, 600)),
            'category_id' => $this->faker->numberBetween(1, 4)
        ];
    }
}
