<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO Users(name,email,password) VALUES 
        ('test_seeder_01','test_seeder_01@punyadev.com','Q9KtJ+ZKaledsHzasWUEbA=='),
        ('test_seeder_02','test_seeder_02@punyadev.com','Q9KtJ+ZKaledsHzasWUEbA=='),
        ('test_seeder_03','test_seeder_03@punyadev.com','Q9KtJ+ZKaledsHzasWUEbA=='),
        ('test_seeder_04','test_seeder_04@punyadev.com','Q9KtJ+ZKaledsHzasWUEbA=='),
        ('test_seeder_05','test_seeder_05@punyadev.com','Q9KtJ+ZKaledsHzasWUEbA==') ");
    }
}
