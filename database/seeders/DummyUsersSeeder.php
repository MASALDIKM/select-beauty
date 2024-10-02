<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Select Beauty',
                'email' => 'selectbeauty@gmail.com',
                'password' => bcrypt('fifumana47'),
                'role' => 'admin'
            ],
            [
                'name' => 'User',
                'email' => 'user12@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'user'
            ]
          
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
