<?php

use Illuminate\Database\Seeder;

class ProductDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_details')->insert([
            [
                'product_sku' => 'G2460PQU',
                'description' => '1920 x 1080, 1ms'
            ],
            [
                'product_sku' => 'G2460PQU',
                'description' => '80000000:1, 350 cd/m2'
            ],
            [
                'product_sku' => 'G2460PQU',
                'description' => 'HDMI, VGA, USB, DVI-D Display-Port'
            ],
            [
                'product_sku' => 'MG279Q',
                'description' => '27", WQHD 2560 x 1440 IPS panel'
            ],
            [
                'product_sku' => 'MG279Q',
                'description' => '144Hz refresh rate and Adaptive-Sync'
            ],
            [
                'product_sku' => 'MG279Q',
                'description' => 'ASUS EyeCare Ultra-Low Blue Light and Flicker-Free'
            ],
            [
                'product_sku' => 'XB271HK',
                'description' => '3840 x 2160 (4K)'
            ],
            [
                'product_sku' => 'XB271HK',
                'description' => '4ms(GTG) response time, 60Hz'
            ],
            [
                'product_sku' => 'XB271HK',
                'description' => 'G-Sync (NVIDIA Adaptive Sync)'
            ],
            [
                'product_sku' => 'G2460PG',
                'description' => '1920 x 1080 (FHD) 1ms'
            ],
            [
                'product_sku' => 'G2460PG',
                'description' => '350 cd/m2'
            ],
            [
                'product_sku' => 'G2460PG',
                'description' => '80,000,000:1'
            ],
            [
                'product_sku' => 'GN246HL',
                'description' => '1920 x 1080'
            ],
            [
                'product_sku' => 'GN246HL',
                'description' => '100,000,000:1, 1ms, 144 Hz'
            ],
            [
                'product_sku' => 'GN246HL',
                'description' => 'D-Sub, DVI, HDMI'
            ],
            [
                'product_sku' => 'VP247H-P',
                'description' => '23" Full HD 1ms monitor'
            ],
            [
                'product_sku' => 'VP247H-P',
                'description' => 'ASUS Rapid Replacement warranty'
            ],
            [
                'product_sku' => 'VP247H-P',
                'description' => 'The TüV Rheinland-certified EyeCare Features'
            ],
            [
                'product_sku' => 'U3415W',
                'description' => '3440 x 1440, 8ms'
            ],
            [
                'product_sku' => 'U3415W',
                'description' => '1000:1'
            ],
            [
                'product_sku' => 'U3415W',
                'description' => '300 cd/m2'
            ],
            [
                'product_sku' => 'X34',
                'description' => '3440 x 1440 UltraWide-QHD 4ms (GTG) 60Hz/100Hz (overclock)'
            ],
            [
                'product_sku' => 'X34',
                'description' => 'Contrast Ratio 1,000,000:1 Max, Display Colors: 1.07 Billion'
            ],
            [
                'product_sku' => 'X34',
                'description' => 'DP, HDMI, USB 3.0'
            ],
            [
                'product_sku' => 'PG279Q',
                'description' => '27" QuadHD (1440p) thin bezel design Gaming monitor'
            ],
            [
                'product_sku' => 'PG279Q',
                'description' => '165Hz refresh rate'
            ],
            [
                'product_sku' => 'PG279Q',
                'description' => 'IPS Panel displays with full sRGB gamut'
            ],
        ]);
    }
}
