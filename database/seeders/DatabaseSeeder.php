<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

            EmployeeSeeder::class
        ]);

        DB::table('register')->insert([
            [
                'name' => 'Fitri',
                'email' => 'Fitri@gmail.com',
                'kota' => 'surabaya',
                'alamat' => 'ketintang'
            ],
            [
                'name' => 'Rayani',
                'email' => 'Rayani@gmail.com',
                'kota' => 'surabaya',
                'alamat' => 'ketintang'
            ],
            [
                'name' => 'siahaan',
                'email' => 'siahaan@gmail.com',
                'kota' => 'surabaya',
                'alamat' => 'ketintang'
            ],
        ]);
    }
}
