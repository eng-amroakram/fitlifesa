<?php

namespace Database\Seeders;

use App\Models\MeasurementUnit;
use Illuminate\Database\Seeder;

class MeasurementUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'id'    => 1,
                'ar' => [
                    'name'   => "كوب"
                ],
                'en' => [
                    'name'   => "cup"
                ],
            ],[
                'id'    => 2,
                'ar' => [
                    'name'   => "نصف لتر"
                ],
                'en' => [
                    'name'   => "pint"
                ],
            ],[
                'id'    => 3,
                'ar' => [
                    'name'   => "ربع غالون"
                ],
                'en' => [
                    'name'   => "quart"
                ],
            ],[
                'id'    => 4,
                'ar' => [
                    'name'   => "جرام"
                ],
                'en' => [
                    'name'   => "gram"
                ],
            ],[
                'id'    => 5,
                'ar' => [
                    'name'   => "مليلتر"
                ],
                'en' => [
                    'name'   => "milliliter"
                ],
            ],[
                'id'    => 6,
                'ar' => [
                    'name'   => "لتر"
                ],
                'en' => [
                    'name'   => "liter"
                ],
            ],

        ];
        foreach($types as $type){
            MeasurementUnit::create($type);
        }
    }
}
