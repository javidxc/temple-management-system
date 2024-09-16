<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        
        User::create([
            'name' => 'Admin',
            'email' => 'admin@xcteam.in',
            'remember_token' => Str::random(20),
            'password' => Hash::make('xcteam@123#'),
            'created_at' => date('Y-m-d'),
        ]);
    }
}
