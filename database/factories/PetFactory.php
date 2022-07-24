<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pet;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{

    protected $model = Pet::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name' => $this->faker->unique()->randomElement(['Koko','Alfi','Obi','Chipsy','Džambo','Falcon','Ivy','Vili','Tedy','Shadow','Puki','Piksi','Pascal','Ogi']),
        'year' => $this->faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezone = null),
        'breed'=> $this->faker->numberBetween(1,5),
        'price'=> $this->faker->numberBetween(200,1499),

        ];
    }
}
