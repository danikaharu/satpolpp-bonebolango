<?php

namespace Database\Seeders;

use App\Models\Admin\Complaint;
use Illuminate\Database\Seeder;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Complaint::factory()->count(5)->create();
    }
}
