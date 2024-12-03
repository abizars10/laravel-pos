<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sqlPath = database_path('seeders/data/laravel_pos_villages.sql');
        if(File::exists($sqlPath)){
            DB::unprepared(File::get($sqlPath));
            $this->command->info('Villages data seeded successfully!');
        }else{
            $this->command->error('Villages SQL file not found.');
        }
    }
}
