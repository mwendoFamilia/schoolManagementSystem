<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gender'=>$this->faker->word(),
            'first_name'=>$this->faker->firstName,
            'middle_name'=>$this->faker->lastName,
            'last_name'=>$this->faker->lastName,
            'date_of_birth'=>$this->faker->date(),
            'other_student_details'=>$this->faker->sentence,
        ];
    }
}
