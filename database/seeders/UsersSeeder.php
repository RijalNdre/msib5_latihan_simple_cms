<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Rizal Andrias M',
                'email' => 'rijal@gmail.com',
                'password' => Hash::make('1234')
            ]
        ];

        DB::table('users')->insert($users);
    }
}
