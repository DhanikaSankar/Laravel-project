<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=>'Jhon Due',
                'fk_department'=>1,
                'fk_designation'=>1,
                'phone_number'=>'1234567890'
            ],

            [
                'name'=>'Tommy Mark',
                'fk_department'=>2,
                'fk_designation'=>2,
                'phone_number'=>'9876543210'
            ],
        ]);
    }
}
