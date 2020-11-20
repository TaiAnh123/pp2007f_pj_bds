<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 50; $i++){      

        DB::table('image')->insert(
            [
            'link'=>$faker->imageUrl($width = 640, $height = 480),
            'name'=>Str::random(10),
            'products_id' => rand(1, 50),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            ]
            );
    }
}
}