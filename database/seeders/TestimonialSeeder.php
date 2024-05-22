<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'image'        => null,
            'name'         => 'james',
            'message'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, nam!'
        ]);
        Testimonial::create([
            'image'        => null,
            'name'         => 'james',
            'message'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur architecto impedit, doloremque nobis pariatur perferendis eaque minima illo doloribus blanditiis.'
        ]);
        Testimonial::create([
            'image'        => null,
            'name'         => 'james',
            'message'      => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam sequi dolorum voluptas impedit ratione.'
        ]);
    }
}
