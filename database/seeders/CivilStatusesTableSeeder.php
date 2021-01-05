<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CivilStatusesTableSeeder extends Seeder
{
    static $civilStatuses = [
        'Solter@',
        'Casad@',
        'Divorciad@',
        'Viud@'
    ];
    public function run()
    {
        foreach(self::$civilStatuses as $civilStatuse){
            DB::table('civil_statuses')->insert([
                'name'=>$civilStatuse
            ]);
        }
    }
}
