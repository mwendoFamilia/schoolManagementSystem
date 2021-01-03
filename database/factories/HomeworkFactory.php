<?php

namespace Database\Factories;

use App\Models\Homework;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomeworkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Homework::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->numberBetween(1, 10),
            'subject_id' => $this->faker->numberBetween(1, 10),
            'homework_content' => $this->faker->sentence(),
            'grade' => $this->faker->randomLetter(),
            'other_homework_details' => $this->faker->sentence(),
        ];
    }
}
