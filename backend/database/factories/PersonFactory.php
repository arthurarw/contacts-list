<?php

namespace Database\Factories;

use App\Models\Person;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->name,
            'lastname' => $this->faker->lastName,
            'ads_zipcode' => '88930000',
            'ads_street' => $this->faker->streetAddress,
            'ads_number' => $this->faker->buildingNumber,
            'ads_neighborhood' => $this->faker->streetSuffix,
            'ads_city' => $this->faker->city,
            'ads_state' => $this->faker->state,
        ];
    }
}
