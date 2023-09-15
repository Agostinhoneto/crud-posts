<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Agostinho Carrara',
                'email' => 'agostinho@example.com',
                'password' => bcrypt('admin123'),
            ],
            [
                'name' => 'Admin do Zé',
                'email' => 'admin@mail.com',
                'password' => bcrypt('power@123'),
            ],
        ];

        foreach ($users as $userData) {
            User::updateOrCreate(
                [
                    'email' => $userData['email'],
                ],
                $userData,
            );
        }
    }
}
