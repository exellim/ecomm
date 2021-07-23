<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Nvidia RTX 2060',
                "price"=>"12000000",
                "description"=>"Just accept it, it may not be enough!",
                "category"=>"GPU",
                "gallery"=>"https://www.windowscentral.com/sites/wpcentral.com/files/styles/large/public/field/image/2019/07/nvidia-rtx-2070.jpg"
            ],
            [
                'name'=>'Nvidia RTX 3090',
                "price"=>"30000000",
                "description"=>"It's more than enough",
                "category"=>"GPU",
                "gallery"=>"https://img.okezone.com/content/2020/09/02/16/2271572/nvidia-luncurkan-geforce-rtx-3090-mampu-tembus-8k-60-fps-2UDMoGlDGK.jpg"
            ]
        ]);
    }

}
