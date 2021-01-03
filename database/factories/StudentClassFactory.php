<?php

namespace Database\Factories;

use App\Models\StudentClass;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentClassFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentClass::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'classes_id' => $this->faker->numberBetween(1, 10),
            'student_id' => $this->faker->numberBetween(1, 10),
            'date_from' => $this->faker->date(),
            'date_to' => $this->faker->date(),
        ];
    }
}
