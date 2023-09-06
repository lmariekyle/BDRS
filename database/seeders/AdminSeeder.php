<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstName' => 'Admin',
            'middleName' => 'BDRS',
            'lastName' => 'Realty',
            'dateOfBirth' => NULL,
            'contactNumber' => '1234567890',
            'userRole' => 'Admin',
            'userStatus' => 'Active',
            'email' => 'admin@bdrs.com',
            'email_verified_at' => now(),
            'password' => Hash::make('adminbdrs'),
        ])->assignRole('Admin');
    }
}