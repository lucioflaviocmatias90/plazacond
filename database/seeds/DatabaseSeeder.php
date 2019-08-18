<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(ResidentTypesTableSeeder::class);
        $this->call(ConditionApartmentsTableSeeder::class);
        $this->call(ApartmentsTableSeeder::class);
        $this->call(PhonesTableSeeder::class);
        // $this->call(OwnersTableSeeder::class);
    }
}
