<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 12.01.2018
 * Time: 8:40
 */
$opilane = array(
    'eesnimi' => 'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 15,
    'klass' => 9
);

echo '<pre>';
print_r($opilane);
echo '</pre>';

foreach ($opilane as $vaartus){
    echo $vaartus.'<br />';
}

foreach ($opilane as $element => $vaartus){
    echo $element.' - '.$vaartus.'<br />';
}