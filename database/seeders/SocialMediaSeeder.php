<?php

namespace Database\Seeders;

use App\Models\Platfrom;
use App\Models\SocialMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platfrom = Platfrom::query()->pluck('id');

        SocialMedia::create([
            'platfrom_id'   => $platfrom->random(),
            'url'           => 'https://laravel.com/docs/11.x/collections#method-diffkeys'
        ]);
        SocialMedia::create([
            'platfrom_id'   => $platfrom->random(),
            'url'           => 'https://laravel.com/docs/11.x/collections#method-diffkeys'
        ]);
    }
}
