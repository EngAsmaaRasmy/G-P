<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctor_logins')->delete();
        DB::table('doctor_logins')->insert([
            'name' => 'doctorlogin',
            'email' => 'doctor@gmail.com',
            'password' => Hash::make(md5('12345678')),
        ]);
    }
}
