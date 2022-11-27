<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('publishers')->insert([
        ['name'=>'Heroic Publishing House',
            'address'=>'2740 Whaley Lane',
            'phone'=>'412-762-0308',
            'email'=>'hph@publishing.com',
            'image'=>'https://picsum.photos/200',
            ],
            ['name'=>'Sentinels Publishing Co',
            'address'=>'2135 Oak Way',
            'phone'=>'386-789-2140',
            'email'=>'spc@publishing.com',
            'image'=>'https://picsum.photos/200',
            ],
            ['name'=>'Optic Press',
            'address'=>'4256 Isaacs Creek Road',
            'phone'=>'270-519-0026',
            'email'=>'OptcPress@publishing.com',
            'image'=>'https://picsum.photos/200',
            ],
            ['name'=>'Cloud9 Publishing Group',
            'address'=>'3212 Ingram Street',
            'phone'=>'507-425-7123',
            'email'=>'C9PressGroup@publishing.com',
            'image'=>'https://picsum.photos/200',
            ]
        ]);
    }
}
