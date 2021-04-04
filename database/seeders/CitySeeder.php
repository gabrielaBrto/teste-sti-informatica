<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['id' => 1, 'name' => 'Campinas'],
            ['id' => 2, 'name' => 'Campos do Jordão'],
            ['id' => 3, 'name' => 'Caraguatatuba'],
            ['id' => 4, 'name' => 'São José dos Campos'],
            ['id' => 5, 'name' => 'São Paulo']
        ];
    
        DB::table('cities')->insert($cities);
    }
}
