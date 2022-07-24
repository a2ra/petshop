<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{

    protected $model = Customer::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Azra','Amna','Emina','Ena','Elma','Lejla','Belma','Adna','Amra','Erna','Anesa']),
            'lastname' => $this->faker->randomElement(['Babić','Bašić','Delić','Hadzić','Begić','Keserović','Kapić','Lojić']),

            'email'=>$this->faker->email(),
            'phonenumber' => $this->faker->unique()->numberBetween(100000000,999999999),
        ];
    }
}
