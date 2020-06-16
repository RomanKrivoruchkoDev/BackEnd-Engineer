<?php

use Illuminate\Database\Seeder;

class AnalyticTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Parsed data from xlsx file via 3ty service */
        $array = array(
            array('1', 'max_Bld_Height_m', 'm', '1', '1'),
            array('2', 'min_lot_size_m2', 'm2', '1', '0' ),
            array('3', 'fsr', ':1', '1', '2')
        );

        foreach ($array as $item) {
            $property = new \App\Models\AnalyticType([
                'id' => $item[0],
                'name' => $item[1],
                'units' => $item[2],
                'is_numeric' => (bool) $item[3],
                'num_decimal_places' => $item[4]
            ]);

            $property->save();
        }
    }
}
