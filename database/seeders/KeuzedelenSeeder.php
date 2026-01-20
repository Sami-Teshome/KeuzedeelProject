<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KeuzedelenSeeder extends Seeder
{
    public function run()
    {
        DB::table('keuzedelen')->insert([
            [
                'naam' => 'Webontwikkeling',
                'opleiding' => 'ICT',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'naam' => 'Grafisch Ontwerp',
                'opleiding' => 'Media',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'naam' => 'Bedrijfseconomie',
                'opleiding' => 'Economie',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
