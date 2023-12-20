<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinceSeeder extends Seeder
{
    public function run(): void
    {
        $provinces = Http::withOptions(['verify' => false,])->withHeaders([
            'key' => env('RAJAONGKIR_API_KEY')
        ])->get('https://api.rajaongkir.com/starter/province')->json()['rajaongkir']['results'];

        foreach ($provinces as $province) {
            Province::create([
                'name'        => $province['province'],
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}


// namespace Database\Seeders;

// use App\Models\Province;
// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\Http;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

// class ProvinceSeeder extends Seeder
// {
//     // /**
//     //  * Run the database seeds.
//     //  *
//     //  * @return void
//     //  */
//     // public function run()
//     // {
//     //     //Baris ini membaca file JSON yang berisi data provinsi, 
//     //     //dan menyimpannya ke dalam variabel $file.
//     //     $file = file_get_contents(base_path('/database/provinsi.json'));

//     //     //Baris ini mendekodekan string JSON yang tersimpan di variabel 
//     //     $data = json_decode ($file, true);


//     //     Province::insert($data);
//     // }
//     public function run(): void
//     {
//         $provinces = Http::withOptions(['verify' => false,])->withHeaders([
//             'key' => env('RAJAONGKIR_API_KEY')
//         ])->get('https://api.rajaongkir.com/starter/province')->json()['rajaongkir']['results'];

//         foreach ($provinces as $province) {
//             Province::create([
//                 'name'        => $province['province'],
//                 'created_at'  => now(),
//                 'updated_at'  => now(),
//             ]);
//         }
//     }

// }