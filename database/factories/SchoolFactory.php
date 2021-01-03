<?php

namespace Database\Factories;

use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = School::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address_id' => $this->faker->numberBetween(1,10),
            'School_name' => $this->faker->word(),
            'school_principal' => $this->faker->name,
            'other_school_details' => $this->faker->sentence,
        ];
    }
}
