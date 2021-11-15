<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Complaint;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComplaintFactory extends Factory
{
    protected $model = Complaint::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->userName().'@gmail.com',
            'status' => '0',
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->sentence(),
        ];
    }
}
