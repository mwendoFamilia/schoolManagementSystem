<?php

namespace Database\Factories;

use App\Models\Fee;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'classes_id'=>$this->faker->numberBetween(1,10), 
            'term_id'=>$this->faker->numberBetween(1,10), 
            'amount'=>$this->faker->numberBetween(1000,10000),

        ];
    }
}
