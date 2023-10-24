<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            //dirección de la carpeta con las imagenes
            //almacena posts/imagen.jpg
            'url' => 'posts/' .$this->faker->image('public/storage/posts', 640, 480, null, false)
            //Si colocamos true guarda: public/storage/posts/imagen.jpg
            //Si colocamos false guarda: imagen.jpg
        ];
    }
}
