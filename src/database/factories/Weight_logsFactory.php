<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Weight_logs;
use Illuminate\Database\Eloquent\Factories\Factory;

class Weight_logsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory()->create();

        return [
            'user_id' => '1',
            'date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'weight' => $this->faker->numberBetween(55,65),
            'calories' => $this->faker->numberBetween(800,1300),
            'exercise_time' => $this->faker->date('H:i'),
        ];
    }
}
