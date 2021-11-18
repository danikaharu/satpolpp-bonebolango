<?php

namespace Database\Seeders;

use App\Models\Admin\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            ['title' => 'Profile Instansi', 'slug' => Str::slug('Profile Instansi'), 'content' => Str::random(10)],
            ['title' => 'Struktur Organisasi', 'slug' => Str::slug('Struktur Organisasi') , 'content' => Str::random(10)],
            ['title' => 'Unit Dan Jabatan', 'slug' => Str::slug('Unit Dan Jabatan') , 'content' => Str::random(10)],
            ['title' => 'Tugas Pokok Dan Fungsi', 'slug' => Str::slug('Tugas Pokok Dan Fungsi') , 'content' => Str::random(10)],
            ['title' => 'Visi & Misi', 'slug' => Str::slug('Visi & Misi') , 'content' => Str::random(10)],
        ]);
    }
}
