<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'title'    => 'Hair Cut',
            'value'    => 94,
            'user_id'  => 2
        ]);

        DB::table('skills')->insert([
            'title'    => 'Beard Cut',
            'value'    => 76,
            'user_id'  => 2
        ]);

        DB::table('skills')->insert([
            'title'    => 'Hair Cut',
            'value'    => 92,
            'user_id'  => 3
        ]);

        DB::table('skills')->insert([
            'title'    => 'Beard Cut',
            'value'    => 84,
            'user_id'  => 3
        ]);
    }
}
