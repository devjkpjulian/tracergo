<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

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
            'name' => 'SUPER ADMIN',
            'email' => 'jkpjulian@icreatedev.live',
            'password' => Hash::make('Gr34t@July'),
            'email_verified_at' => date("Y-m-d"),
            'admin' => true,
            'trial' => false,
        ]);

        User::create([
            'name' => 'ADMIN',
            'email' => 'admin@tracergo.ph',
            'password' => Hash::make('Zxasqw12'),
            'email_verified_at' => date("Y-m-d"),
            'admin' => true,
            'trial' => false,
        ]);

        User::create([
            'name' => 'DEMO',
            'email' => 'demo@tracergo.ph',
            'password' => Hash::make('tracergoph'),
            'email_verified_at' => date("Y-m-d"),
            'admin' => false,
            'trial' => false,
        ]);

        User::create([
            'name' => 'TEST',
            'email' => 'test@tracergo.ph',
            'password' => Hash::make('Zxasqw12'),
            'email_verified_at' => date("Y-m-d"),
            'admin' => false,
            'trial' => true,
        ]);

        User::create([
            'name' => 'Manlapaz Embroidery',
            'email' => 'mikemanimation@gmail.com',
            'password' => Hash::make('tracergoph'),
            'email_verified_at' => date("Y-m-d"),
            'admin' => false,
            'trial' => false,
        ]);
    }
}
