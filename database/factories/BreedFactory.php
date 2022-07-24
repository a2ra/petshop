<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Breed;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Breed>
 */
class BreedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Breed::class;
    public function definition()
    {
        return [
         'name'=>$this->faker->unique()->randomElement(['Njemacki ovcar','Pitbull','Pudla','Husky','Corella']),
         'country'=>$this->faker->randomElement(['DE','ENG','BIH']),
         'category'=>$this->faker->numberBetween(1,3),
        ];
    }
}
