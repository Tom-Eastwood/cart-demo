<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'sku' => 'G2460PQU',
                'name' => 'AOC G2460PQU 24" 1ms Black/Red Extreme Professional 144 Hz Gaming LED Monitor, 1920 x 1080, 80000000:1, 350 cd/m2, 16:9, HDMI, VGA, USB, DVI-D, Display Port, Tilt, Built-in Speaker',
                'description' => '144Hz refresh rate with 1ms response time. 1920 x 1080 resolution gaming monitor boasting VGA, DVI-Dual Link, DisplayPort, HDMI, and four USB 2.0 ports including a fast charger. Extreme performance that is lag-free and smooth rendering for competitive gamers.',
                'size' => 24,
                'quantity' => 100,
                'price' => 309.99
            ],
            [
                'sku' => 'MG279Q',
                'name' => 'ASUS MG279Q Black 27" IPS 144 Hz 4ms Adaptive-Sync (Free Sync) WQHD LED Gaming Monitor, 2560x1440 (2K),w/ Asus Excusive GamePlus and Flicker Free Technology, Pivot&Height Adjustment, Built-in speaker',
                'description' => 'G279Q gaming display is built for victory in the professional gaming arena, and features a WQHD panel with a 144Hz refresh rate and wide viewing angles. Its ergonomic design, together with Flicker-Free and Ultra Low Blue Light technology, ensure you stay comfortable during those marathon gaming sessions.',
                'size' => 27,
                'quantity' => 100,
                'price' => 759.99
            ],
            [
                'sku' => 'XB271HK',
                'name' => 'Acer Predator XB271HK 27" 4K UHD IPS NVIDIA G-Sync Black/Red Gaming Monitor, 3840 x 2160 (4K), 100% sRGB Color accuracy, Tilt/Swivel/Pivot/Height Adjustable, Build in Speakers',
                'description' => 'Fasten your seatbelt: Acer\'s Predator XB241H Full HD display is about to turbocharge your gaming experience.',
                'size' => 24,
                'quantity' => 100,
                'price' => 549.99
            ],
            [
                'sku' => 'G2460PG',
                'name' => 'AOC G2460PG 24" 1ms (GTG) 144 Hz Gaming Monitor, NVIDIA G-SYNC, NVIDIA 3D Vision Ready, Ultra Low Motion Blur (ULMB) Technology, Height Adjustment, VESA Mountable, USB 3.0 and DisplayPort',
                'description' => '24" - Ultimate performance with NVIDIA G-SYNC™ that eliminates screen-tearing and stuttering for smoothest and fastest gaming experience yet.',
                'size' => 24,
                'quantity' => 100,
                'price' => 449.99
            ],
            [
                'sku' => 'GN246HL',
                'name' => 'Acer GN246HL Black 24" Gaming Monitors, 144 Hz 1ms (GTG), LED Backlight LCD Monitor Provide Immersive 3D Image',
                'description' => 'Acer GN246HL 24" 3D Full HD Widescreen monitor sports a super-slim profile with an X-shaped stand that lets it fit nicely in spaces of any size.',
                'size' => 24,
                'quantity' => 100,
                'price' => 289.99
            ],
            [
                'sku' => 'VP247H-P',
                'name' => 'ASUS VP247H-P Black 23.6" 1ms (GTG) HDMI Widescreen LED Backlight LCD Monitor 250 cd/m2 ASCR 100,000,000:1',
                'description' => 'The VP247H-P delivers vivid, lifelike visuals in Full HD with a 1ms response time to eliminate ghosting and tracers for smoother video playback and gaming.',
                'size' => 27,
                'quantity' => 100,
                'price' => 259.99
            ],
            [
                'sku' => 'U3415W',
                'name' => 'Dell U3415W Black 34" 4K Curved LED Backlight IPS Monitor, 3440 x 1440, 1000:1, 300cd/m2, HDMI&MHL&USB Display Port, Height, Swivel, Tilt',
                'description' => 'Discover one of the world’s first 34 inch 21:9 curved monitors with a panoramic view, cinematic WQHD resolution and superb sound.',
                'size' => 34,
                'quantity' => 100,
                'price' => 869.99
            ],
            [
                'sku' => 'X34',
                'name' => 'Acer Predator X34 bmiphz Black 34" IPS 4ms (GTG) 60Hz/100Hz, 3440 x 1440 21:9, NVIDIA G-SYNC Ultra-wide Curved Gaming Monitor, ZeroFrame Design, Predator GameView Technology, VESA Mountable, Tilt/Height Adjustable, 2 x 7w Speakers',
                'description' => 'The Predator X34 is designed for ultimate gaming performance and style, the 21:9 aspect ratio and 34-inch curved screens transform your viewing experience by drawing you deep into the action',
                'size' => 34,
                'quantity' => 100,
                'price' => 1548.99
            ],
            [
                'sku' => 'PG279Q',
                'name' => 'ASUS ROG PG279Q Black 27" WQHD IPS 2560X1440, NVIDIA G-Sync Gaming Monitor, 165 Hz refresh Rate, Slim Bezel Design with HDMI USB Ergonomic EyeCare Technology',
                'description' => '27-inch, WQHD 2560 x 1440 resolution display feature IPS technology for wide 178-degree viewing angles and lifelike gaming visuals',
                'size' => 27,
                'quantity' => 100,
                'price' => 999.99
            ]
        ]);
    }
}
