<?php

namespace Database\Factories;

use App\Models\Address_parent_;
use Illuminate\Database\Eloquent\Factories\Factory;

class Address_parent_Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address_parent_::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address_id' => $this->faker->numberBetween(1,10),
            'parent__id' => $this->faker->numberBetween(1,10),
        ];
    }
}
