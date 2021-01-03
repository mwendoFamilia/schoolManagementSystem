<?php

namespace Database\Factories;

use App\Models\Report;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Report::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->word(),
            'report_content' => $this->faker->firstName(),
            'teachers_comments' => $this->faker->lastName(),
            'other_report_details' => $this->faker->lastName(),
            'year' => $this->faker->year(),
            'term_id' => $this->faker->numberBetween(1,3),
            'subject_id' => $this->faker->numberBetween(1,3),
            'subject_score' => $this->faker->numberBetween(1,100),
            'subject_grade' => $this->faker->randomLetter(),
            'exam_id' => $this->faker->numberBetween(1,10),
            'test_id' => $this->faker->numberBetween(1,10),
            
        ];
    }
}
