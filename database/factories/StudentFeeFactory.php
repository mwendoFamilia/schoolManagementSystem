<?php

namespace Database\Factories;

use App\Models\StudentFee;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentFee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'student_id'=>$this->faker->numberBetween(1,10),
            'fee_balance'=>$this->faker->numberBetween(-1000,1000),
        ];
    }
}
