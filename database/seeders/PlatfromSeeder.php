<?php

namespace Database\Seeders;

use App\Models\Platfrom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatfromSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'platfrom_name' => 'facebook',
                'icon'          => '<i class="fa-brands fa-facebook-f"></i>'
            ],
            [
                'platfrom_name' => 'instagram',
                'icon'          => '<i class="fa-brands fa-instagram"></i>'
            ],
            [
                'platfrom_name' => 'youtube',
                'icon'          => '<i class="fa-brands fa-youtube"></i>'
            ],
            [
                'platfrom_name' => 'tik tok',
                'icon'          => '<i class="fa-brands fa-tiktok"></i>'
            ],
            [
                'platfrom_name' => 'email',
                'icon'          => '<i class="fa-regular fa-envelope"></i>'
            ],
            [
                'platfrom_name' => 'whatsapp',
                'icon'          => '<i class="fa-brands fa-whatsapp"></i>'
            ],
            [
                'platfrom_name' => 'linkedin',
                'icon'          => '<i class="fa-brands fa-linkedin"></i>'
            ],
        ])->each(function ($item) {
            Platfrom::create($item);
        });
    }
}
