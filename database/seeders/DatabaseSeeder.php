<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        DB::table('roles')->insert([
            ["name" => "admin"],
            ["name" => "webmaster"],
            ["name" => "editeur"]
        ]);

        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@mail.com',
            'password' => Hash::make('testtest'),
            'role_id' => 2,
            'created_at' => now()
        ]);
    }
}
