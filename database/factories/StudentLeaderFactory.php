<?php

namespace Database\Factories;

use App\Models\StudentLeader;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentLeaderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentLeader::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'leadership_id'=>$this->faker->numberBetween(1,10),
            'student_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
