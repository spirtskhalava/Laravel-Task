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
        DB::table('applicant')->insert([
            'fname' => 'სანდრო',
            'lname' => 'ფირცხალავა',
            'number' => 12345,
            'hired' => 0,
        ]);
        // $this->call(UserSeeder::class);
    }
}
