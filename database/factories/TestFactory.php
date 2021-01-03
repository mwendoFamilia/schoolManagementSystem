<?php

namespace Database\Factories;

use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Test::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id'=>$this->faker->numberBetween(1,10), 
            'subject_id'=>$this->faker->numberBetween(1,10),
            'exam_id'=>$this->faker->numberBetween(1,10),
            'score'=>$this->faker->numberBetween(1,10),
            'grade'=>$this->faker->randomLetter,
        ];
    }
}
