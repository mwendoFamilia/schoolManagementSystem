<?php

namespace Database\Factories;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Exam::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'classes_id' => $this->faker->numberBetween(1, 10),
            'Subject_id' => $this->faker->numberBetween(1, 10),
            'exam_code' => $this->faker->numberBetween(1, 10),
            'exam_name' => $this->faker->word(),
            'other_exam_details' => $this->faker->sentence(),

        ];
    }
}
