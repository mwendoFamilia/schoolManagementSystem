<?php

namespace Database\Factories;

use App\Models\Parent_;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Parent_::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gender' => $this->faker->word(),
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->lastName(),
            'last_name' => $this->faker->lastName(),
            'otherparent_details' => $this->faker->sentence(),
        ];
    }
}
