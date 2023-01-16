<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            'title' => "College Essentials",
            'subtitle' => "BEDROOM",
            'price' => 195
        ];
        $quality = [
            'title' => "Select quality",
            'arr' => ["Basic", "Premium"],
        ];

        $size = [
            'title' => "Size",
            'arr' => ["Twin XL", "Full"],
        ];
        $style = [
            'title' => "Style",
            'arr' => ["Minimal", "Bohemian", "Floral", "Other"],
        ];
        $color = [
            'title' => "Color",
            'arr' => [
                [
                    'color' => "#C2B3AF",
                    'img' => "https://www.togas.com/media/catalog/product/cache/1512aade760a85cd99082ae563244eb8/N/O/NOES_BL_VRTCL_A_3b5e.jpg",
                ],
                [
                    'color' => "#EBEBEB",
                    'img' => "https://www.togas.com/media/catalog/product/cache/1512aade760a85cd99082ae563244eb8/_/1/_1__4_9_4c93.jpg",
                ],
                [
                    'color' => "#957C6D",
                    'img' => "https://www.togas.com/media/catalog/product/cache/1512aade760a85cd99082ae563244eb8/S/H/SHALTON_BL_VRTCL_63a1.jpg",
                ],
                [
                    'color' => "#6C1627",
                    'img' => "https://www.togas.com/media/catalog/product/cache/1512aade760a85cd99082ae563244eb8/M/I/MIDARIA_AD_01_1920x1080_3198.jpg",
                ],
            ],
        ];

        $product = Products::create($product);

        $product->color()->create($color);
        $product->quality()->create($quality);
        $product->size()->create($size);
        $product->style()->create($style);
    }

}
