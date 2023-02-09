<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert(array(
            array(
                'name'          => 'Admin',
                'username'      => 'admin',
                'email'         => 'admin@gmail.com',
                'password'      => Hash::make("1234"),
                'role'          => 1
            ),
            array(
                'name'          => 'Anggota',
                'username'      => 'anggota',
                'email'         => 'anggota@gmail.com',
                'password'      => Hash::make("1234"),
                'role'          => 2
            ),
        ));
    }
}
