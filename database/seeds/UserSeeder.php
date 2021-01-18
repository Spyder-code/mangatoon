<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Almi',            
            'email' => 'almi@yahoo.com',            
            'password' => Hash::make('admin123'),            
            'role' => 'admin',            
        ]);
        User::create([
            'name' => 'luay',            
            'email' => 'luay@yahoo.com',            
            'password' => Hash::make('admin123'),            
            'role' => 'member',            
        ]);
    }
}
