<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;


class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $items = [
            [
                'id' => 1,
                'name' => 'Ghidaq Necklace In 18K Yellow Gold With Akoya Pearls And Diamond',
                'description' => '18k yellow gold necklace is inspired by musical notes, in a harmonious composition of beauty and grace',
                'price' => 5500,
                'image' => 'img2.png',
            ],
            [
                'id' => 2,
                'name' => 'Ghidaq Necklace In 18K White Gold With Akoya Pearls And Diamond',
                'description' => '18k white gold necklace is inspired by musical notes, in a harmonious composition of beauty and grace',
                'price' => 6400,
                'image' => 'img3.png',
            ],
            [
                'id' => 3,
                'name' => 'Ghidaq Necklace In 18K Yellow Gold With Akoya Pearls, Diamond, Pink And Green Tourmaline',
                'description' => '18k yellow gold necklace brings an artful twist to the melody of life',
                'price' => 4300,
                'image' => 'img4.png',
            ],
            [
                'id' => 4,
                'name' => 'Ghidaq Ring In 18K Yellow Gold With Akoya Pearls And Diamond',
                'description' => 'Bring the beautiful power of music to your look with this 18k yellow gold ring',
                'price' => 4800,
                'image' => 'img5.png',
            ],
            [
                'id' => 5,
                'name' => 'Ghidaq Necklace In 18K Yellow Gold With Akoya Pearls And Diamond',
                'description' => 'Striking a dazzling note, this 18k white gold necklace brings an artful twist to the melody of life',
                'price' => 3600,
                'image' => 'img6.png',
            ],
            [
                'id' => 6,
                'name' => 'Ghidaq Earrings In 18K Yellow Gold With Akoya Pearls And Diamond',
                'description' => 'Strike a dazzling note with this pair of 18k yellow gold earrings inspired by the beauty and rhythm of music',
                'price' => 3300,
                'image' => 'img7.png',
            ],
            [
                'id' => 7,
                'name' => 'Ghidaq Bracelet 18K Yellow Gold With Akoya Pearls And Diamond',
                'description' => 'Beautifully orchestrated, this Ghidaq bracelet in 18k yellow gold is inspired by musical notes',
                'price' => 3400,
                'image' => 'img8.png',
            ],
            [
                'id' => 8,
                'name' => 'Ghidaq Ring In 18K White Gold With Akoya Pearls And Blue Sapphires',
                'description' => 'Bring the beautiful power of music to your look with this 18k white gold ring.',
                'price' => 5200,
                'image' => 'img9.png',
            ],
        ];
        
        foreach ($items as $itemData) {
            Item::create($itemData);
        }
        

    }
    
}
