<?php

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            'G2460PQU',
            'MG279Q',
            'XB271HK',
            'G2460PG',
            'GN246HL',
            'VP247H-P',
            'U3415W',
            'X34',
            'PG279Q'
        ];

        foreach ($products as $sku) {
            DB::table('product_images')->insert([
                'product_sku' => $sku,
                'file_name' => 'thumb.jpg'
            ]);

            for ($i = 1; $i < 4; $i++) { 
                DB::table('product_images')->insert([
                    'product_sku' => $sku,
                    'file_name' => "main$i.jpg"
                ]);
            }
        }
    }
}
