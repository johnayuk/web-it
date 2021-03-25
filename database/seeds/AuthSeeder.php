<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role'=> 'admin',
            'firstName' => 'Administrator',
            'lastName'=>'Admin',
            'email' => 'test@test.com',
            'password' => Hash::make('password'),
        ]);
    }
}
