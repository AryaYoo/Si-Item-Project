<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            $registers=[
            [
                'nama' => 'fitri',
                'email' => 'fitri@gmail.com',
                'kota' => 'surabaya',
                'alamat' => 'ketintang barat',
            ],
               [
                    'nama' => 'rayani',
                    'email' => 'rayani@gmail.com',
                    'kota' => 'surabaya',
                    'alamat' => 'ketintang barat',
                ],

            ];
        DB::table('register')->insert($registers);
    }

    public function index()
{
    $pageTitle = 'register List';

    // RAW SQL QUERY
    $register = DB::select('
        select *, register.id as register_id,

    ');

    return view('register.index', [
        'pageTitle' => $pageTitle,
        'register' => $register
    ]);
}
}
