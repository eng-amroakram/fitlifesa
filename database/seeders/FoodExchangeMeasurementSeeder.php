<?php

namespace Database\Seeders;

use App\Models\FoodExchange;
use App\Models\FoodExchangeMeasurement;
use App\Models\MeasurementUnit;
use Illuminate\Database\Seeder;

class FoodExchangeMeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foodExchanges = FoodExchange::get();
        $measurements = MeasurementUnit::get();
        $foodExchangeMeasurements = [
            [
                'id'                      => 1,
                'food_exchange_id'        => $foodExchanges[0]['id'],
                'measurement_unit_id'     => $measurements[0]['id'],
                'quantity'                => 2,
            ],
            [
                'id'                      => 2,
                'food_exchange_id'        => $foodExchanges[0]['id'],
                'measurement_unit_id'     => $measurements[1]['id'],
                'quantity'                => 2,
            ],
            [
                'id'                      => 3,
                'food_exchange_id'        => $foodExchanges[1]['id'],
                'measurement_unit_id'     => $measurements[0]['id'],
                'quantity'                => 4,
            ],
            [
                'id'                      => 4,
                'food_exchange_id'        => $foodExchanges[2]['id'],
                'measurement_unit_id'     => $measurements[2]['id'],
                'quantity'                => 4,
            ],[
                'id'                      => 5,
                'food_exchange_id'        => $foodExchanges[3]['id'],
                'measurement_unit_id'     => $measurements[3]['id'],
                'quantity'                => 5,
            ],[
                'id'                      => 6,
                'food_exchange_id'        => $foodExchanges[3]['id'],
                'measurement_unit_id'     => $measurements[2]['id'],
                'quantity'                => 6,
            ],[
                'id'                      => 7,
                'food_exchange_id'        => $foodExchanges[4]['id'],
                'measurement_unit_id'     => $measurements[1]['id'],
                'quantity'                => 2,
            ],[
                'id'                      => 8,
                'food_exchange_id'        => $foodExchanges[4]['id'],
                'measurement_unit_id'     => $measurements[2]['id'],
                'quantity'                => 3,
            ],[
                'id'                      => 9,
                'food_exchange_id'        => $foodExchanges[5]['id'],
                'measurement_unit_id'     => $measurements[1]['id'],
                'quantity'                => 4,
            ],[
                'id'                      => 10,
                'food_exchange_id'        => $foodExchanges[6]['id'],
                'measurement_unit_id'     => $measurements[2]['id'],
                'quantity'                => 3,
            ],[
                'id'                      => 11,
                'food_exchange_id'        => $foodExchanges[7]['id'],
                'measurement_unit_id'     => $measurements[3]['id'],
                'quantity'                => 2,
            ],[
                'id'                      => 12,
                'food_exchange_id'        => $foodExchanges[8]['id'],
                'measurement_unit_id'     => $measurements[2]['id'],
                'quantity'                => 2,
            ],[
                'id'                      => 13,
                'food_exchange_id'        => $foodExchanges[8]['id'],
                'measurement_unit_id'     => $measurements[4]['id'],
                'quantity'                => 4,
            ],[
                'id'                      => 14,
                'food_exchange_id'        => $foodExchanges[9]['id'],
                'measurement_unit_id'     => $measurements[1]['id'],
                'quantity'                => 1,
            ],[
                'id'                      => 15,
                'food_exchange_id'        => $foodExchanges[9]['id'],
                'measurement_unit_id'     => $measurements[4]['id'],
                'quantity'                => 4,
            ],
        ];
        foreach($foodExchangeMeasurements as $measurement){
            FoodExchangeMeasurement::create($measurement);
        }

    }
}
