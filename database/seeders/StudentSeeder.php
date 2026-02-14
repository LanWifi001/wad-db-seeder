<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

// Difference between Seeder and Factory: A Seeder is responsible for populating the database with data, while a Factory is responsible for generating fake data for a specific model. In this case, the StudentSeeder uses the StudentFactory to create and insert multiple student records into the database.

class StudentSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory(50)->create();
    }
}
