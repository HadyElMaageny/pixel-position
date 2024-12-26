<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(["$30,000 USD", "$40,000 USD", "$50,000 USD", "$60,000 USD", "$70,000 USD"]),
            'location' => fake()->randomElement(["New York", "Los Angeles", "Chicago", "Houston", "Phoenix", "Remote", "Cairo"]),
            'schedule' => fake()->randomElement(["Full-time", "Part-time", "Contract", "Internship"]),
            'url' => fake()->url,
            'featured' => false,
        ];
    }
}
