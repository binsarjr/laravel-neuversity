<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dosen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Dosen::create([
            'nama' => "Binsar dwi",
            'slug' => Str::slug("Binsar Dwi"),
            "kelamin" => "L",
            'nip' => "123456789",
            "alamat" => "jln jln",
            "sudah_menikah" => false,
        ]);
        Dosen::create([
            'nama' => "Ali asdasd",
            'slug' => Str::slug("Ali asdsad"),
            "kelamin" => "L",
            'nip' => "965432",
            "alamat" => "jln jln",
            "sudah_menikah" => false,
        ]);
    }
}
