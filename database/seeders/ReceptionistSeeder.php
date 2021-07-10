<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ReceptionistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receptionist_logins')->delete();
        DB::table('receptionist_logins')->insert([
            'name' => 'receptionist',
            'email' => 'receptionist@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
