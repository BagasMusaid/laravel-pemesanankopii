<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'joko',
                'username' => 'jokondo',
                'role' => 'admin',
                'email' => 'jokosusilo@gmail.com',
                'password' => bcrypt('123456')
            ]

        ];
        foreach ($userData as $ud => $value) {
            User::create($value);
        }
    }
}
