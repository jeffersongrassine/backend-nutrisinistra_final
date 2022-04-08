<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Jefferson',
            'last_name' => 'Grassine',
            'email' => 'jeff@gmail.com',
            'password' => 'secret',
        ]);

        \App\Models\User::factory(10)->create();
        \App\Models\Anamnese::factory(10)->create();
    }
}
