<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // 'name' => Str::random(10),
            'name' => "Mohamed Gamal",
            'email' => "mohamedgamal7872@gmail.com",
            'role' => "PORTFOLIO-ADMIN",
            'password' => Hash::make('12345678'),
        ]);
    }
}
