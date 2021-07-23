<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title'    => 'Hair Cut',
            'price'    => 40000,
            'user_id'  => 2
        ]);

        DB::table('services')->insert([
            'title'    => 'Beard Cut',
            'price'    => 30000,
            'user_id'  => 2
        ]);

        DB::table('services')->insert([
            'title'    => 'Hair Cut',
            'price'    => 35000,
            'user_id'  => 3
        ]);

        DB::table('services')->insert([
            'title'    => 'Beard Cut',
            'price'    => 25000,
            'user_id'  => 3
        ]);
    }
}
