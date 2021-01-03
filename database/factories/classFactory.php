<?php

namespace Database\Factories;

use App\Models\classes;
use Brick\Math\BigInteger;
use Illuminate\Database\Eloquent\Factories\Factory;


class classFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = classes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'teacher_id'=>$this->faker->numberBetween(1,10), 
            'class_code'=>$this->faker->numberBetween(1,10), 
            'class_name'=>$this->faker->name(),
            'school_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
