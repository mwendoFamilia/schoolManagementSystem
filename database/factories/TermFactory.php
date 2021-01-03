<?php

namespace Database\Factories;

use App\Models\Term;
use Illuminate\Database\Eloquent\Factories\Factory;

class TermFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Term::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'term_name'=>$this->faker->word(), 
            'term_code'=>$this->faker->numberBetween(1,3), 
            'year'=>$this->faker->year(),

        ];
    }
}
