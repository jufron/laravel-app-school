<?php

namespace Database\Seeders;

use App\Models\Telepon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeleponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['no_telepon'    => '6282146554549'],
            ['no_telepon'    => '6282146554548'],
        ])->each(function ($item) {
            Telepon::create($item);
        });
    }
}
