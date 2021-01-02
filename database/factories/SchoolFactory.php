<?php

namespace Database\Factories;

use App\Models\Schools;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schools::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address_id'=>$this->faker->address,
            'School_name'=>$this->faker->sentence,
            'school_princiapl'=>$this->faker->name,
            'othe_school_deatils'=>$this->faker->sentence,
        ];
    }
}

