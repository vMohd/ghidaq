<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promo;

class PromoSeeder extends Seeder
{

    public function run()
    {
        $promoCodes = [
            [
                'code' => 'GG',
                'discount' => 555,
            ],
            [
                'code' => 'FIRST',
                'discount' => 500,
            ],
            [
                'code' => 'GHIDAQ',
                'discount' => 1000,
            ],
        ];

        Promo::insert($promoCodes);
    }
}
