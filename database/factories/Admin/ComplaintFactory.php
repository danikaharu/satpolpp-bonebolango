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
        $title = $this->faker->text();
        return [
            'name' => $this->faker->name(),
            'slug' =>  Str::slug($title),
            'email' => $this->faker->userName() . '@gmail.com',
            'status' => '0',
            'title' => $title,
            'description' => $this->faker->sentence(),
        ];
    }
}
