<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DaysTableSeeder extends Seeder
{
    static $days = [
        'Lunes',
        'Martes',
        'Miércoles',
        'Jueves',
        'Viernes',
        'Sábado',
        'Domingo'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        foreach(self::$days as $day){
            DB::table('days')->insert([
                'name'=>$day
            ]);
        }
    }
}
