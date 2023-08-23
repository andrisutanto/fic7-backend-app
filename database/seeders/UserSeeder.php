<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();
        User::create([
            'name' => 'Andri Sutanto',
            'email' => 'test@example.com',
            'email_verified_at'  => now(),
            'role' => 'admin',
            'phone' => '08111111111',
            'bio' => 'developer',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'email_verified_at'  => now(),
            'role' => 'superadmin',
            'phone' => '0811112222',
            'bio' => 'laravel dev',
            'password' => Hash::make('12345678'),
        ]);
    }
}
