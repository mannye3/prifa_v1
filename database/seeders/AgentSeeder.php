<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agents')->insert([
            'id' => Str::uuid(),
            'company_name' => 'Prifa Homez',
            'firstname' => 'Emmanuel',
            'lastname' =>'John',
            'email' => 'emma@prifa.com',
            'password' => Hash::make('password'),
            'phone' => '09000000001',
            'address' => '123 Fasoro street, Ikoyi, Lagos',
            'status' => true,
        ]);
    }
}
