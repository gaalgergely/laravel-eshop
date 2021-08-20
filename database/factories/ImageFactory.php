<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'path' => "images/products/{$this->faker->numberBetween(1, 10)}.jpg"
        ];
    }

    public function user()
    {
        return $this->state([
            'path' => "images/users/{$this->faker->numberBetween(1, 6)}.jpg"
        ]);
    }
}
