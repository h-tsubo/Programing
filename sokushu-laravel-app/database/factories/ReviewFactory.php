<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => $this->faker->numberBetween(1, 9),
            'name' => $this->faker->randomElement([
                '山田太郎',
                '鈴木智子',
                '田中博司',
                '佐藤二朗',
                '藤田花子'
        ]),
            'body' => $this->faker->text(200)
        ];
    }
}
