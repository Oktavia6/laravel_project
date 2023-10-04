<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::Create([
            'name'=>'admin',
            'email'=>'okta@gmail.com',
            'password'=>bcrypt('rahasia')
        ]);
        User::Create([
            'name'=>'staff',
            'email'=>'avita@gmail.com',
            'password'=>bcrypt('rahasia')
        ]);
        User::Create([
            'code'=>'string',
            'name'=>'mie indomie',
            'price'=>bcrypt('3500')
        ]);
    }
}
