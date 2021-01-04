<?php

namespace Database\Factories;

use App\Models\SubjectTeacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectTeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubjectTeacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject_id'=>$this->faker->numberBetween(1,10), 
            'teacher_id'=>$this->faker->numberBetween(1,10), 
        ];
    }
}
