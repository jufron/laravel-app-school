<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sekolah::create([
            'nama'                      => 'SMK Uyelindo',
            'logo'                      => 'image',
            'deskripsi'                 => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure enim mollitia consequatur. Illum impedit libero expedita dolores, molestiae voluptatem excepturi!',
            'alamat'                    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, beatae!',
            'no_telepon'                => '0380 000 00',
            'sejarah_sekolah'           => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore praesentium corrupti maiores quos. Placeat, eos reiciendis cumque ab obcaecati voluptatum rem quis quos dolore quibusdam eaque perferendis maiores nemo, voluptatem, impedit ipsam! Consequatur laudantium repudiandae officiis iusto asperiores consectetur fugiat!',
            'visi_misi'                 => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit molestias exercitationem et vero voluptates temporibus sed nulla voluptate quia at minus quibusdam ipsam aperiam est perferendis corrupti, debitis officia unde, totam, numquam voluptatum! Magnam expedita, quo asperiores tenetur minima similique enim, maxime vitae ullam debitis aperiam a aliquid voluptas aliquam voluptatibus officia sapiente placeat quos odio alias culpa adipisci officiis. Laboriosam consequuntur dolorum vero cumque voluptatem blanditiis minima assumenda sapiente.',
            'nama_kepala_sekolah'       => 'Suryani Benga Tokan S.Kom',
            'foto_kepala_sekolah'       => 'image',
            'periode_kepala_sekolah'    => '2024 - 2034',
            'pesan_kepala_sekolah'      => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium ratione tenetur, rem ipsa quae impedit! Sit vitae ipsam dolorem odio laborum placeat nobis minus a maiores, totam corporis fuga cumque.'
        ]);
    }
}
