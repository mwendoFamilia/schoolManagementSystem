<?php

namespace Database\Factories;

use App\Models\StudentAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->numberBetween(1,10),
            'address_id' => $this->faker->numberBetween(1,10),
            'other_address_details' => $this->faker->address,
        ];
    }
}
