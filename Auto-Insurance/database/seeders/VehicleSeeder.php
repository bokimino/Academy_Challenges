<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $carBrands = ['Toyota', 'Honda', 'Ford', 'Audi', 'Chevrolet', 'BMW', 'Mercedes-Benz'];
        $carModels = ['Sedan', 'SUV', 'Truck', 'Coupe', 'Convertible'];

        foreach (range(1, 50) as $index) {
            Vehicle::create([
                'brand' => $faker->randomElement($carBrands),
                'model' => $faker->randomElement($carModels),
                'plate_number' => $faker->bothify('??-###-???'),
                'insurance_date' => $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            ]);
        }
    }
}
