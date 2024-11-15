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
        $userData = 
        [
            [
                'name'=>'User pertama',
                'email' =>'pengguna@gmail.com',
                'role' => 'user',
                'password' => bcrypt('user123'),
                'confirm_password' => bcrypt('user123')
            ],
            [
                'name'=>'Admin pertama',
                'email' =>'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin123'),
                'confirm_password' => bcrypt('admin123')
            ],
        ];

        foreach($userData as $key => $val)
        {
            User::create($val);
        }
    }
}
