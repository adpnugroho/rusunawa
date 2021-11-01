<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'level' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Faisal Fachrureza',
            'email' => 'faisal@gmail.com',
            'password' => Hash::make('faisal123'),
            'level' => '2',
        ]);
    }
}
