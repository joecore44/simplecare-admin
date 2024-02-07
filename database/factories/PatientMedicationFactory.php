<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PatientMedication>
 */
class PatientMedicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'size' => $this->faker->randomNumber(2),
            'strength' => $this->faker->randomNumber(3) . 'mg',
            'price' => $this->faker->randomFloat(2, 0.01, 100),
            'notes' => $this->faker->sentence,
            'instructions' => $this->faker->paragraph,
            'is_active' => true,
            'is_rx' => true,
            'explainer_id' => $this->faker->uuid,
            'webste_description' => $this->faker->text,
            'related_items' => json_encode([$this->faker->word, $this->faker->word]),
            'position' => $this->faker->numberBetween(1, 10),
        ];
    }
}
