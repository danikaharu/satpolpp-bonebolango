<?php

namespace Database\Factories\Admin;

use Illuminate\Support\Str;
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
        $name = $this->faker->name();
        return [
            'name' => $name,
            'slug' =>  Str::slug($name),
            'email' => $this->faker->userName().'@gmail.com',
            'status' => '0',
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->sentence(),
        ];
    }
}
