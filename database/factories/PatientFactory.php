<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public $gender = ["male", "female"];
    public $status = ["in-patient", "out-patient"];
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'name' => fake()->name(),
            'gender' => $this->gender[array_rand($this->gender)],
            'phone' => fake()->e164PhoneNumber(),
            'email' => fake()->email(),
            'address' => fake()->streetAddress(),
            'state' => fake()->state(),
            'nationality' => fake()->country(),
            'status' => $this->status[array_rand($this->status)],
        ];
    }
}