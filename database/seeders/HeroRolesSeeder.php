<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroRolesSeeder extends Seeder
{
    public function run()
    {
        DB::table('hero_roles')->insert([
            ['role' => 'Assassin'],
            ['role' => 'Mage'],
            ['role' => 'Fighter'],
        ]);
    }
}
