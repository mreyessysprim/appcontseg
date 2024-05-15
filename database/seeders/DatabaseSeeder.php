<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

//use Illuminate\App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Administrador',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make("12345678"),
        // ]);
        //$this->call(UserSeeder::class);
    }
}
