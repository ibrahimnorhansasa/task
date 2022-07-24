<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Str;
use Spatie\Permission\Models\Role;
use Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
         $user = \App\Models\User::create([
            'name' => 'Admin',      
            'email'=>'admin@admin.com',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'password'=>Hash::make(password),
            'created_at' => now(),
            'updated_at' => now(),
         ]);


    }
}