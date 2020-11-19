<?php

use App\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('provinces')->delete();
        $string = file_get_contents(__DIR__ .'/dist/tinh_tp.json');
        $json_a = json_decode($string, true);
        foreach($json_a as $item){
            Province::create(array(
                'name' => $item['name'],
                'slug' => $item['slug'],
                'type' => $item['type'],
                'name_with_type' => $item['name_with_type'],
                'code' => $item['code'],
                'products_id' => rand(1,50),
            ));

        }
                
    }
}

