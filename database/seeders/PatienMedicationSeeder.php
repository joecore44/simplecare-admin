<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatienMedicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patient_medications')->insert([
            [
                'name' => 'Ibuprofen',
                'size' => '100',
                'strength' => '200mg',
                'price' => 12.99,
                'notes' => 'Take with food',
                'instructions' => 'Take 1 tablet every 4 hours',
                'is_active' => true,
                'is_rx' => false,
                'explainer_id' => '1234',
                'webste_description' => 'Ibuprofen is a nonsteroidal anti-inflammatory drug (NSAID). It works by reducing hormones that cause inflammation and pain in the body.',
                'related_items' => json_encode(['Acetaminophen', 'Aspirin']),
                'position' => 1,
            ],
            [
                'name' => 'Aspirin',
                'size' => '50',
                'strength' => '500mg',
                'price' => 34.49,
                'notes' => 'Take with water',
                'instructions' => 'Take 1 tablet every 6 hours',
                'is_active' => true,
                'is_rx' => false,
                'explainer_id' => '5678',
                'webste_description' => 'Aspirin is a salicylate (sa-LIS-il-ate). It works by reducing substances in the body that cause pain, fever, and inflammation.',
                'related_items' => json_encode(['Ibuprofen', 'Acetaminophen']),
                'position' => 2,
            ],
            [
                'name' => 'Acetaminophen 2',
                'size' => '75',
                'strength' => '300mg',
                'price' => 124.25,
                'notes' => 'Take after meals',
                'instructions' => 'Take 2 tablets every 8 hours',
                'is_active' => true,
                'is_rx' => false,
                'explainer_id' => '91011',
                'webste_description' => 'Acetaminophen is a pain reliever and a fever reducer. It is used to treat many conditions such as headache, muscle aches, arthritis, backache, toothaches, colds, and fevers.',
                'related_items' => json_encode(['Ibuprofen', 'Aspirin']),
                'position' => 3,
            ],
            [
                'name' => 'Acetaminophen',
                'size' => '75',
                'strength' => '300mg',
                'price' => 46.25,
                'notes' => 'Take after meals',
                'instructions' => 'Take 2 tablets every 8 hours',
                'is_active' => true,
                'is_rx' => false,
                'explainer_id' => '91011',
                'webste_description' => 'Acetaminophen is a pain reliever and a fever reducer. It is used to treat many conditions such as headache, muscle aches, arthritis, backache, toothaches, colds, and fevers.',
                'related_items' => json_encode(['Ibuprofen', 'Aspirin']),
                'position' => 3,
            ],
            [
                'name' => 'Acetaminophen 3',
                'size' => '75',
                'strength' => '300mg',
                'price' => 44.25,
                'notes' => 'Take after meals',
                'instructions' => 'Take 2 tablets every 8 hours',
                'is_active' => true,
                'is_rx' => false,
                'explainer_id' => '91011',
                'webste_description' => 'Acetaminophen is a pain reliever and a fever reducer. It is used to treat many conditions such as headache, muscle aches, arthritis, backache, toothaches, colds, and fevers.',
                'related_items' => json_encode(['Ibuprofen', 'Aspirin']),
                'position' => 3,
            ],
            [
                'name' => 'Acetaminophen 4',
                'size' => '75',
                'strength' => '300mg',
                'price' => 4.25,
                'notes' => 'Take after meals',
                'instructions' => 'Take 2 tablets every 8 hours',
                'is_active' => true,
                'is_rx' => false,
                'explainer_id' => '91011',
                'webste_description' => 'Acetaminophen is a pain reliever and a fever reducer. It is used to treat many conditions such as headache, muscle aches, arthritis, backache, toothaches, colds, and fevers.',
                'related_items' => json_encode(['Ibuprofen', 'Aspirin']),
                'position' => 3,
            ],
            [
                'name' => 'Acetaminophen 5',
                'size' => '75',
                'strength' => '300mg',
                'price' => 4.25,
                'notes' => 'Take after meals',
                'instructions' => 'Take 2 tablets every 8 hours',
                'is_active' => true,
                'is_rx' => false,
                'explainer_id' => '91011',
                'webste_description' => 'Acetaminophen is a pain reliever and a fever reducer. It is used to treat many conditions such as headache, muscle aches, arthritis, backache, toothaches, colds, and fevers.',
                'related_items' => json_encode(['Ibuprofen', 'Aspirin']),
                'position' => 3,
            ],
        ]);

    }
}
