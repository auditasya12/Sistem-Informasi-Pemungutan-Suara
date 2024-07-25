<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ConfigsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configs')->insert([
            'start' => '2024-07-01 00:00:00',
            'end' => '2024-07-31 23:59:59',
            'announcement' => 'Pengumuman Event',
            'event_name' => 'E-Voting Event',
            'location' => 'Jakarta',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
