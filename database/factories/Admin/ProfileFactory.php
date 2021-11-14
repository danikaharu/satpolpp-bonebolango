<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    protected $model = Profile::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'content' => $this->faker->paragraph(),
        ];
    }
}
