<?php

namespace Database\Factories;
use App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */


class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Shop::class;
    public function definition()
    {
        return [
            'code'=>$this->faker->unique()->numberBetween(1000,9000),
            'year' => $this->faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezone = null),
            'pets'=> $this->faker->numberBetween(1,7),
            'customer'=> $this->faker->numberBetween(1,8),
        ];
    }
}
