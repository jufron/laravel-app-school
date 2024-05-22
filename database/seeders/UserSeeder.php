<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'              => 'james',
            'email'             => 'james@gmail.com',
            'password'          => Hash::make('12345678'),
            'email_verified_at' => now()
        ]);
        User::create([
            'name'              => 'putri',
            'email'             => 'putri@gmail.com',
            'password'          => Hash::make('12345678'),
            'email_verified_at' => now()
        ]);
        User::create([
            'name'              => 'putri',
            'email'             => 'putri@gmail.com',
            'password'          => Hash::make('12345678'),
            'email_verified_at' => now()
        ]);
        User::create([
            'name'              => 'superadmin',
            'email'             => 'superadmin@gmail.com',
            'password'          => Hash::make('12345678'),
            'email_verified_at' => now()
        ]);
    }
}
