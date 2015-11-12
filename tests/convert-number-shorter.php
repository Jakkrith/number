<?php


namespace Test\Shorter;

require dirname(__DIR__).'/Okvee/Number/NumberThai.php';
require dirname(__DIR__).'/Okvee/Number/NumberEng.php';
require dirname(__DIR__).'/Okvee/Number/Number.php';


$numbers = array(
    -43213895, '-1000000', '-0.12345',
    0.987523, 0.05, 0.99,
    '1.00', '21', 31, 1001, 100001, 324.50
);


class Shorter
{


    public function run()
    {
        $number_obj = new \Okvee\Number\Number();

        echo '<strong>English convertNumber</strong><br>';
        foreach ($GLOBALS['numbers'] as $num) {
            echo $num.' = '.$number_obj->convertNumber($num, 'Eng');
            echo '<br>';
        }
        echo '<br>';
        echo '<strong>Thai convertNumber</strong><br>';
        foreach ($GLOBALS['numbers'] as $num) {
            echo $num.' = '.$number_obj->convertNumber($num);
            echo '<br>';
        }
        echo '<br>';

        echo '<strong>English convertBaht</strong><br>';
        foreach ($GLOBALS['numbers'] as $num) {
            echo $num.' = '.$number_obj->convertBaht($num, true, 'Eng');
            echo '<br>';
        }
        echo '<br>';
        echo '<strong>Thai convertBaht</strong><br>';
        foreach ($GLOBALS['numbers'] as $num) {
            echo $num.' = '.$number_obj->convertBaht($num, true);
            echo '<br>';
        }
        echo '<br>';
    }// run


}


// use namespace for test namespace in \Okvee\Number\Number();
$test = new \Test\Shorter\Shorter();
$test->run();