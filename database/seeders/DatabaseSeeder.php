<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Config;
use App\Models\Candidate;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Fikri Omar',
            'username' => 'fikriomar16',
            'password' => '$2a$10$CcMMYla3Z8vDE1Zb94WSFOk4VmuLNK4xcOiTsxeiZMF6IuDwx6ffW',
            'is_super' => 1
        ]);
        Admin::create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'password' => '$2a$10$CcMMYla3Z8vDE1Zb94WSFOk4VmuLNK4xcOiTsxeiZMF6IuDwx6ffW',
            'is_super' => 1
        ]);
        \App\Models\Config::factory(1)->create();
        // \App\Models\User::factory(27)->create();
        \App\Models\Admin::factory(3)->create();
        \App\Models\Candidate::factory(3)->create();


        // Call ConfigSeeder
        $this->call(ConfigsSeeder::class);
    }
}
