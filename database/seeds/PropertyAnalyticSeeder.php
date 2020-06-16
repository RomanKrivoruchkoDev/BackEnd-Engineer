<?php

use Illuminate\Database\Seeder;

class PropertyAnalyticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->getData();

        foreach ($data as $datum) {
            $property = new \App\Models\PropertyAnalytic([
                'property_id' => $datum[0],
                'analytic_type_id' => $datum[1],
                'value' => $datum[2]
            ]);

            $property->save();
        }
    }

    /**
     * Parsed data from xlsx file via 3ty service
     *
     * @return array
     */
    public function getData()
    {
        return array(
            array(
                '1',
                '1',
                '17'
            ),
            array(
                '2',
                '1',
                '21'
            ),
            array(
                '3',
                '1',
                '29'
            ),
            array(
                '4',
                '1',
                '16'
            ),
            array(
                '5',
                '1',
                '17'
            ),
            array(
                '6',
                '1',
                '15'
            ),
            array(
                '7',
                '1',
                '21'
            ),
            array(
                '8',
                '1',
                '10'
            ),
            array(
                '9',
                '1',
                '14'
            ),
            array(
                '10',
                '1',
                '24'
            ),
            array(
                '11',
                '1',
                '26'
            ),
            array(
                '12',
                '1',
                '12'
            ),
            array(
                '13',
                '1',
                '22'
            ),
            array(
                '14',
                '1',
                '22'
            ),
            array(
                '15',
                '1',
                '34'
            ),
            array(
                '16',
                '1',
                '10'
            ),
            array(
                '17',
                '1',
                '34'
            ),
            array(
                '18',
                '1',
                '34'
            ),
            array(
                '19',
                '1',
                '17'
            ),
            array(
                '20',
                '1',
                '28'
            ),
            array(
                '21',
                '1',
                '11'
            ),
            array(
                '22',
                '1',
                '22'
            ),
            array(
                '23',
                '1',
                '30'
            ),
            array(
                '24',
                '1',
                '11'
            ),
            array(
                '25',
                '1',
                '35'
            ),
            array(
                '26',
                '1',
                '11'
            ),
            array(
                '27',
                '1',
                '37'
            ),
            array(
                '28',
                '1',
                '13'
            ),
            array(
                '29',
                '1',
                '38'
            ),
            array(
                '30',
                '1',
                '29'
            ),
            array(
                '31',
                '1',
                '34'
            ),
            array(
                '32',
                '1',
                '28'
            ),
            array(
                '33',
                '1',
                '17'
            ),
            array(
                '34',
                '1',
                '11'
            ),
            array(
                '35',
                '1',
                '12'
            ),
            array(
                '36',
                '1',
                '20'
            ),
            array(
                '37',
                '1',
                '39'
            ),
            array(
                '38',
                '1',
                '17'
            ),
            array(
                '39',
                '1',
                '35'
            ),
            array(
                '40',
                '1',
                '28'
            ),
            array(
                '41',
                '1',
                '31'
            ),
            array(
                '42',
                '1',
                '19'
            ),
            array(
                '43',
                '1',
                '13'
            ),
            array(
                '44',
                '1',
                '25'
            ),
            array(
                '45',
                '1',
                '39'
            ),
            array(
                '46',
                '1',
                '22'
            ),
            array(
                '47',
                '1',
                '17'
            ),
            array(
                '48',
                '1',
                '17'
            ),
            array(
                '49',
                '1',
                '27'
            ),
            array(
                '50',
                '1',
                '25'
            ),
            array(
                '51',
                '1',
                '39'
            ),
            array(
                '52',
                '1',
                '20'
            ),
            array(
                '53',
                '1',
                '23'
            ),
            array(
                '54',
                '1',
                '15'
            ),
            array(
                '55',
                '1',
                '39'
            ),
            array(
                '56',
                '1',
                '27'
            ),
            array(
                '57',
                '1',
                '36'
            ),
            array(
                '58',
                '1',
                '31'
            ),
            array(
                '59',
                '1',
                '17'
            ),
            array(
                '60',
                '1',
                '33'
            ),
            array(
                '61',
                '1',
                '14'
            ),
            array(
                '62',
                '1',
                '13'
            ),
            array(
                '63',
                '1',
                '26'
            ),
            array(
                '64',
                '1',
                '10'
            ),
            array(
                '65',
                '1',
                '34'
            ),
            array(
                '66',
                '1',
                '23'
            ),
            array(
                '67',
                '1',
                '16'
            ),
            array(
                '68',
                '1',
                '18'
            ),
            array(
                '69',
                '1',
                '15'
            ),
            array(
                '70',
                '1',
                '18'
            ),
            array(
                '71',
                '1',
                '18'
            ),
            array(
                '72',
                '1',
                '23'
            ),
            array(
                '73',
                '1',
                '36'
            ),
            array(
                '74',
                '1',
                '34'
            ),
            array(
                '75',
                '1',
                '23'
            ),
            array(
                '76',
                '1',
                '29'
            ),
            array(
                '77',
                '1',
                '32'
            ),
            array(
                '78',
                '1',
                '33'
            ),
            array(
                '79',
                '1',
                '36'
            ),
            array(
                '80',
                '1',
                '37'
            ),
            array(
                '81',
                '1',
                '22'
            ),
            array(
                '82',
                '1',
                '12'
            ),
            array(
                '83',
                '1',
                '16'
            ),
            array(
                '84',
                '1',
                '9'
            ),
            array(
                '85',
                '1',
                '9'
            ),
            array(
                '86',
                '1',
                '20'
            ),
            array(
                '87',
                '1',
                '14'
            ),
            array(
                '88',
                '1',
                '15'
            ),
            array(
                '89',
                '1',
                '17'
            ),
            array(
                '90',
                '1',
                '15'
            ),
            array(
                '91',
                '1',
                '10'
            ),
            array(
                '92',
                '1',
                '22'
            ),
            array(
                '93',
                '1',
                '21'
            ),
            array(
                '94',
                '1',
                '16'
            ),
            array(
                '95',
                '1',
                '11'
            ),
            array(
                '96',
                '1',
                '33'
            ),
            array(
                '97',
                '1',
                '36'
            ),
            array(
                '98',
                '1',
                '34'
            ),
            array(
                '99',
                '1',
                '13'
            ),
            array(
                '100',
                '1',
                '33'
            ),
            array(
                '2',
                '2',
                '340'
            ),
            array(
                '3',
                '2',
                '823'
            ),
            array(
                '4',
                '2',
                '821'
            ),
            array(
                '6',
                '2',
                '1095'
            ),
            array(
                '8',
                '2',
                '1101'
            ),
            array(
                '9',
                '2',
                '970'
            ),
            array(
                '10',
                '2',
                '1049'
            ),
            array(
                '12',
                '2',
                '184'
            ),
            array(
                '14',
                '2',
                '192'
            ),
            array(
                '15',
                '2',
                '939'
            ),
            array(
                '16',
                '2',
                '745'
            ),
            array(
                '18',
                '2',
                '749'
            ),
            array(
                '20',
                '2',
                '428'
            ),
            array(
                '21',
                '2',
                '277'
            ),
            array(
                '22',
                '2',
                '1103'
            ),
            array(
                '24',
                '2',
                '544'
            ),
            array(
                '26',
                '2',
                '778'
            ),
            array(
                '27',
                '2',
                '234'
            ),
            array(
                '28',
                '2',
                '395'
            ),
            array(
                '30',
                '2',
                '784'
            ),
            array(
                '32',
                '2',
                '247'
            ),
            array(
                '33',
                '2',
                '959'
            ),
            array(
                '34',
                '2',
                '738'
            ),
            array(
                '36',
                '2',
                '559'
            ),
            array(
                '38',
                '2',
                '599'
            ),
            array(
                '39',
                '2',
                '383'
            ),
            array(
                '40',
                '2',
                '282'
            ),
            array(
                '42',
                '2',
                '309'
            ),
            array(
                '44',
                '2',
                '410'
            ),
            array(
                '45',
                '2',
                '190'
            ),
            array(
                '46',
                '2',
                '594'
            ),
            array(
                '48',
                '2',
                '228'
            ),
            array(
                '50',
                '2',
                '284'
            ),
            array(
                '51',
                '2',
                '758'
            ),
            array(
                '52',
                '2',
                '503'
            ),
            array(
                '54',
                '2',
                '672'
            ),
            array(
                '56',
                '2',
                '714'
            ),
            array(
                '57',
                '2',
                '896'
            ),
            array(
                '58',
                '2',
                '801'
            ),
            array(
                '60',
                '2',
                '1067'
            ),
            array(
                '62',
                '2',
                '1016'
            ),
            array(
                '63',
                '2',
                '918'
            ),
            array(
                '64',
                '2',
                '535'
            ),
            array(
                '66',
                '2',
                '970'
            ),
            array(
                '68',
                '2',
                '1004'
            ),
            array(
                '69',
                '2',
                '238'
            ),
            array(
                '70',
                '2',
                '296'
            ),
            array(
                '72',
                '2',
                '663'
            ),
            array(
                '74',
                '2',
                '1034'
            ),
            array(
                '75',
                '2',
                '318'
            ),
            array(
                '76',
                '2',
                '301'
            ),
            array(
                '78',
                '2',
                '779'
            ),
            array(
                '80',
                '2',
                '225'
            ),
            array(
                '81',
                '2',
                '839'
            ),
            array(
                '82',
                '2',
                '349'
            ),
            array(
                '84',
                '2',
                '567'
            ),
            array(
                '86',
                '2',
                '430'
            ),
            array(
                '87',
                '2',
                '626'
            ),
            array(
                '88',
                '2',
                '812'
            ),
            array(
                '90',
                '2',
                '960'
            ),
            array(
                '92',
                '2',
                '815'
            ),
            array(
                '93',
                '2',
                '1078'
            ),
            array(
                '94',
                '2',
                '605'
            ),
            array(
                '96',
                '2',
                '313'
            ),
            array(
                '98',
                '2',
                '716'
            ),
            array(
                '99',
                '2',
                '426'
            ),
            array(
                '100',
                '2',
                '577'
            ),
            array(
                '2',
                '3',
                '1,270018421451004'
            ),
            array(
                '4',
                '3',
                '3,025543904259222'
            ),
            array(
                '6',
                '3',
                '2,636676918049081'
            ),
            array(
                '8',
                '3',
                '3,346387613837739'
            ),
            array(
                '10',
                '3',
                '2,859468744484467'
            ),
            array(
                '12',
                '3',
                '1,074558188324344'
            ),
            array(
                '14',
                '3',
                '2,932338840998139'
            ),
            array(
                '16',
                '3',
                '2,087584363256167'
            ),
            array(
                '18',
                '3',
                '3,408517082595082'
            ),
            array(
                '20',
                '3',
                '0,8617591363594831'
            ),
            array(
                '22',
                '3',
                '1,541525116793885'
            ),
            array(
                '24',
                '3',
                '3,298127053995042'
            ),
            array(
                '26',
                '3',
                '1,226399995118631'
            ),
            array(
                '28',
                '3',
                '1,865379564970709'
            ),
            array(
                '30',
                '3',
                '3,171412750228743'
            ),
            array(
                '32',
                '3',
                '2,035047004012591'
            ),
            array(
                '34',
                '3',
                '2,099784624477993'
            ),
            array(
                '36',
                '3',
                '1,943599424788873'
            ),
            array(
                '38',
                '3',
                '0,719948632353141'
            ),
            array(
                '40',
                '3',
                '2,553391324475768'
            ),
            array(
                '42',
                '3',
                '1,74514087354835'
            ),
            array(
                '44',
                '3',
                '2,523771201213128'
            ),
            array(
                '46',
                '3',
                '3,332058016130166'
            ),
            array(
                '48',
                '3',
                '1,814933013697981'
            ),
            array(
                '50',
                '3',
                '2,354128601899001'
            ),
            array(
                '52',
                '3',
                '1,294755943647349'
            ),
            array(
                '54',
                '3',
                '2,008035782479012'
            ),
            array(
                '56',
                '3',
                '1,991816458549508'
            ),
            array(
                '58',
                '3',
                '1,38718701818959'
            ),
            array(
                '60',
                '3',
                '3,412101375893755'
            ),
            array(
                '62',
                '3',
                '2,101437553609216'
            ),
            array(
                '64',
                '3',
                '1,697792144317577'
            ),
            array(
                '66',
                '3',
                '1,072720369896711'
            ),
            array(
                '68',
                '3',
                '1,896460345283374'
            ),
            array(
                '70',
                '3',
                '1,599237580140315'
            ),
            array(
                '72',
                '3',
                '2,247411824100575'
            ),
            array(
                '74',
                '3',
                '1,851653347152946'
            ),
            array(
                '76',
                '3',
                '2,290435341004548'
            ),
            array(
                '78',
                '3',
                '3,172783541663893'
            ),
            array(
                '80',
                '3',
                '1,530131423214204'
            ),
            array(
                '82',
                '3',
                '2,036501372529476'
            ),
            array(
                '84',
                '3',
                '0,6286500311170291'
            ),
            array(
                '86',
                '3',
                '0,9619032395058277'
            ),
            array(
                '88',
                '3',
                '2,70683468642116'
            ),
            array(
                '90',
                '3',
                '0,7409603497886342'
            ),
            array(
                '92',
                '3',
                '0,7226889175062041'
            ),
            array(
                '94',
                '3',
                '1,343687917367241'
            ),
            array(
                '96',
                '3',
                '2,435514535568175'
            ),
            array(
                '98',
                '3',
                '2,5791942343968'
            ),
            array(
                '100',
                '3',
                '2,509769932683861'
            )
        );
    }
}
