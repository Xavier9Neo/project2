<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // /**
    //  * Seed the application's database.
    //  *
    //  * @return void
    //  */
    // // public function run(): void
    // // {
    // //     $this->call(ProvinceSeeder::class);
    // //     $this->call(CitySeeder::class);
    // //     $this->call(CourierSeeder::class);
    // // }
    // public function run(): void
    // {
    //     $this->call([
    //         ProvinceSeeder::class,
    //         CitySeeder::class,
    //     ]);
    // }
    public function run(): void
    {
        $this->call([
            ProvinceSeeder::class,
            CitySeeder::class,
        ]);
    }
}