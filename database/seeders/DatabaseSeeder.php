<?php

namespace Database\Seeders;

use App\Models\DoctorLogin;
use App\Models\Receptionist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            UserTableSeeder::class,
            AppointmentSeeder::class,
            SectionTableSeeder::class,
            DoctorTableSeeder::class,
            ImageTableSeeder::class,
            DoctorLoginSeeder::class,
            ReceptionistSeeder::class,
        ]);

    }
}
