<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'full_name' => 'Mahdi',
            'email' => 'mdmahdi45@gmail.com',
            'mobile' => '01777307585',
            'password' => '123456',
            'role' => 'admin',
            'gender' => 'male',
            'profile_picture' => 'none',
            'company_name' => 'none',
            'company_website' => 'none'
        ]);
    }
}
