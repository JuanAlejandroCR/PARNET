<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Ferrer',
            'email' => 'ferrerferrer@mail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('ferrer123.$'),
        ]);
        DB::table('users')->insert([
            'name' => 'Juan',
            'email' => 'juancalzoncit@mail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('juan123.$'),
        ]);
        DB::table('users')->insert([
            'name' => 'Andrea',
            'email' => 'andreagarcia@mail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('andrea123.$'),
        ]);
        DB::table('users')->insert([
            'name' => 'Alfonso',
            'email' => 'alfonsolopez@mail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('alfonso123.$'),
        ]);
    }
}
