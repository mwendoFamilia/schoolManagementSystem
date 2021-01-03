<?php

namespace Database\Factories;

use App\Models\StudentParent;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentParentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentParent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->numberBetween(1, 10),
            'parent__id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
