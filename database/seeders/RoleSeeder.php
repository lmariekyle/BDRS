<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder{
    public function run(){    
        Role::create(['name'=> 'Super Admin']);
        Role::create(['name'=> 'Admin']);    
        Role::create(['name'=> 'Customer Service']);  
        Role::create(['name'=> 'Marketing']);  
        Role::create(['name'=> 'User']);  
    }
}