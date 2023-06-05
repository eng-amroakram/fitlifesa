<?php

namespace Database\Seeders;

use App\Models\FoodExchange;
use App\Models\FoodExchangeMeasurement;
use App\Models\FoodType;
use App\Models\MeasurementUnit;
use Illuminate\Database\Seeder;

class FoodExchangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foodType = FoodType::get();
        $foodExchanges = [
            [
                'id'                  => 1,
                'food_type_id'           => $foodType[0]['id'],
                'ar' => [
                    'title'           => "الخبز والطحين",
                ],
                'en' => [
                    'title'         => "Breads and Flours",
                ],
            ],
            [
                'id'                  => 2,
                'food_type_id'           => $foodType[1]['id'],
                'ar' => [
                    'title'           => "الحبوب والحبوب والمعكرونة",
                ],
                'en' => [
                    'title'         => "Cereals, Grains and Pasta ",
                ],
            ],
            [
                'id'                  => 3,
                'food_type_id'           => $foodType[2]['id'],
                'ar' => [
                    'title'           => "خضروات نشوية",
                ],
                'en' => [
                    'title'         => "Starchy Vegetables",
                ],
            ],
            [
                'id'                  => 4,
                'food_type_id'           => $foodType[3]['id'],
                'ar' => [
                    'title'           => "وجبات خفيفة",
                ],
                'en' => [
                    'title'         => "Snacks",
                ],
            ],
            [
                'id'                  => 5,
                'food_type_id'           => $foodType[4]['id'],
                'ar' => [
                    'title'           => "الفول والبازلاء والعدس (مطبوخ)",
                ],
                'en' => [
                    'title'         => "Beans, Peas and Lentils (Cooked)",
                ],
            ],
            [
                'id'                  => 6,
                'food_type_id'           => $foodType[5]['id'],
                'ar' => [
                    'title'           => "عصير فواكه",
                ],
                'en' => [
                    'title'         => "Fruit Juice",
                ],
            ],
            [
                'id'                  => 7,
                'food_type_id'           => $foodType[1]['id'],
                'ar' => [
                    'title'           => "عصير ليمون",
                ],
                'en' => [
                    'title'         => "Lemon juice",
                ],
            ],
            [
                'id'                  => 8,
                'food_type_id'           => $foodType[1]['id'],
                'ar' => [
                    'title'           => "عصير برتقال",
                ],
                'en' => [
                    'title'         => "orange juice",
                ],
            ],
            [
                'id'                  => 9,
                'food_type_id'           => $foodType[3]['id'],
                'ar' => [
                    'title'           => "شريحة لحم البقر",
                ],
                'en' => [
                    'title'         => "beef steak",
                ],
            ],
            [
                'id'                  => 10,
                'food_type_id'           => $foodType[3]['id'],
                'ar' => [
                    'title'           => "السمك المدخن",
                ],
                'en' => [
                    'title'         => "smoked fish",
                ],
            ],
        ];
        foreach($foodExchanges as $foodExchange){
            FoodExchange::create($foodExchange);
        }
    }
}
