<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'slug' => Str::slug($this->faker->jobTitle()),
            'content' => $this->faker->paragraph(),
        ];
    }
}
