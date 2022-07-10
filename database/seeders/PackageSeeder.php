<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            [
                'title'=>'Wedding and Debut',
                'service_type'=>'Package',
                'modal_titile'=>'Php 490.00 per plate',
            ],
            [
                'title'=>'Wedding and Debut',
                'service_type'=>'Package',
                'modal_titile'=>'50 Person at Php 24,999.00',
            ],
        ];
        $menus = [
            [
                'package_id'=>'Wedding and Debut',
                'title'=>'Package',
            ],
        ];
    }
}
