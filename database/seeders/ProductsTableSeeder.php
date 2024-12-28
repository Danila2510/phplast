<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [

            [
                'name' => 'Линейка 30 см',
                'description' => 'Прозрачная пластиковая линейка для точных измерений.',
                'price' => 10.00,
                'category_id' => 1,
            ],
            [
                'name' => 'Скобы для степлера',
                'description' => 'Набор скоб для офисного степлера, 1000 шт.',
                'price' => 5.00,
                'category_id' => 1,
            ],
            [
                'name' => 'Фломастеры (набор 10 шт.)',
                'description' => 'Фломастеры ярких цветов для творчества.',
                'price' => 40.00,
                'category_id' => 1,
            ],


            [
                'name' => 'Чай зелений 500 г',
                'description' => 'Листовой зелёный чай высокого качества.',
                'price' => 60.00,
                'category_id' => 2,
            ],
            [
                'name' => 'Кока-Кола 1.5 л',
                'description' => 'Газированный напиток в удобной бутылке.',
                'price' => 35.00,
                'category_id' => 2,
            ],
            [
                'name' => 'Енергетик 250 мл',
                'description' => 'Напиток для быстрого восстановления энергии.',
                'price' => 28.00,
                'category_id' => 2,
            ],


            [
                'name' => 'Кефір 2.5% жирності 1 л',
                'description' => 'Питательный кисломолочный напиток.',
                'price' => 20.00,
                'category_id' => 3,
            ],
            [
                'name' => 'Масло вершкове 200 г',
                'description' => 'Натуральное сливочное масло, 82% жирности.',
                'price' => 75.00,
                'category_id' => 3,
            ],
            [
                'name' => 'Сир плавлений 150 г',
                'description' => 'Плавленый сыр для бутербродов.',
                'price' => 28.00,
                'category_id' => 3,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
