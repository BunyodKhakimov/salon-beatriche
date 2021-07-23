<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Nazarova Diyora',
            'email'     => 'n.diyora@gmail.com',
            'password'  => bcrypt('beatriche'),
            'info'      => 'Hi, my name is Diyora. I am an admin of Beatriche',
            'phone'     => '99890123456',
            'role'      => '1'
        ]);

        DB::table('users')->insert([
            'name'      => 'Shoqosim Berdimurodov',
            'email'     => 's.berdimurodov@gmail.com',
            'password'  => bcrypt('beatriche'),
            'info'      => 'Hi, my name is Shoqosim. I am an master of Beatriche',
            'phone'     => '99890123456',
            'role'      => '2'
        ]);

        DB::table('users')->insert([
            'name'      => 'Akmal Raimov',
            'email'     => 'a.raimov@gmail.com',
            'password'  => bcrypt('beatriche'),
            'info'      => 'Hi, my name is Akmal. I am an master of Beatriche',
            'phone'     => '99890123456',
            'role'      => '2'
        ]);
    }
}
