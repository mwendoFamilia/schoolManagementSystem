<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'school_id' => $this->faker->numberBetween(1, 10),
            'classes_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->title(),
            'gender' => $this->faker->word(),
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->lastName,
            'last_name' => $this->faker->lastName,
            'leader_id' => $this->faker->numberBetween(1,10),
            'other_teacher_details' => $this->faker->sentence,
        ];
    }
}
