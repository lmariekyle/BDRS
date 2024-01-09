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
            'accountID'=>'A0001',
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

        User::create([
            'accountID'=>'C-0001',
            'firstName' => 'Mingyu',
            'middleName' => 'Jeon',
            'lastName' => 'Kim',
            'dateOfBirth' => NULL,
            'contactNumber' => '1234567890',
            'userRole' => 'Customer Service',
            'userStatus' => 'Active',
            'email' => 'mingyu@bdrs.com',
            'email_verified_at' => now(),
            'password' => Hash::make('mingyubdrs'),
        ])->assignRole('Customer Service');

        User::create([
            'accountID'=>'M-0001',
            'firstName' => 'Lisa',
            'middleName' => 'La',
            'lastName' => 'Manoban',
            'dateOfBirth' => NULL,
            'contactNumber' => '1234567890',
            'userRole' => 'Marketing',
            'userStatus' => 'Active',
            'email' => 'lisa@bdrs.com',
            'email_verified_at' => now(),
            'password' => Hash::make('lisabdrs'),
        ])->assignRole('Marketing');

        User::create([
            'accountID'=>'User-001',
            'firstName' => 'Lourdes',
            'middleName' => 'Marie',
            'lastName' => 'Kyle',
            'dateOfBirth' => NULL,
            'contactNumber' => '1234567890',
            'userRole' => 'User',
            'userStatus' => 'Active',
            'email' => 'lourdes@bdrs.com',
            'email_verified_at' => now(),
            'password' => Hash::make('lourdesbdrs'),
        ])->assignRole('User');

        User::create([
            'accountID'=>'  MH-001',
            'firstName' => 'Horbs',
            'middleName' => 'Reb',
            'lastName' => 'Barriga',
            'dateOfBirth' => NULL,
            'contactNumber' => '1234567890',
            'userRole' => 'User',
            'userStatus' => 'Active',
            'email' => 'horbs@bdrs.com',
            'email_verified_at' => now(),
            'password' => Hash::make('horbsbdrs'),
        ])->assignRole('Marketing Head');
    }
}