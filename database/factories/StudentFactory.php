<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $courses = ['BSIS', 'BAB', 'BSA', 'BSAIS', 'BSSW'];
        return [
            'id' => $this->faker->unique()->numberBetween(1, 10000), // Explanation: Generates a unique ID for each student using Faker's numberBetween() method.
            'student_id' => 'STU' . str_pad($this->faker->unique()->numberBetween(1, 10000), 4, '0', STR_PAD_LEFT), // Explanation: Generates a unique student ID in the format "STU0001", "STU0002", etc.
            'first_name' => $this->faker->firstName(), // Explanation: Generates a random first name using Faker's firstName() method.
            'last_name' => $this->faker->lastName(), // Explanation: Generates a random last name using Faker's lastName() method.
            'email' => $this->faker->unique->safeEmail(), // Explanation: Generates a unique and safe email address using Faker's safeEmail() method.
            'year_level' => $this->faker->numberBetween(1, 4), // Explanation: Generates a random year level between 1 and 4 using Faker's numberBetween() method.
            'course' => $this->faker->randomElement($courses), // Explanation: Randomly selects a course from the predefined $courses array using Faker's randomElement() method.
        ];
    }
}
