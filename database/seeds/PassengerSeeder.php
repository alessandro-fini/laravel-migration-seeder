<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Passenger;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newPassenger = new Passenger();

            $newPassenger->name = $faker->name();
            $newPassenger->birth_date = $faker->date();
            $newPassenger->address = $faker->address();
            $newPassenger->country = $faker->country();
            $newPassenger->phone = $faker->phoneNumber();
            $newPassenger->passenger_id = $faker->bothify('?##??#-?#??');
            $newPassenger->train_car = $faker->numberBetween(1, 15);
            $newPassenger->price = $faker->randomFloat(2, 10, 1000);

            $newPassenger->save();
        }
    }
}
