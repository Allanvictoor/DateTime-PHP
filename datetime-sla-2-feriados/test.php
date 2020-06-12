<?php

include 'get_sla.php';
$data = new \DateTime('2020-05-11 13:30:00');
$dataFeriado = new DateTime('2020-06-10 17:00:00');

$t1 = get_sla($data, 2);
echo "Espera-se 2020-05-11 15:30:00" . PHP_EOL;
var_dump($t1);

$t2 = get_sla($data, 8);
echo "Espera-se 2020-05-12 11:30:00" . PHP_EOL;
var_dump($t2);

$t3 = get_sla($data, 10);
echo "Espera-se 2020-05-12 14:45:00" . PHP_EOL;
var_dump($t3);

$t4 = get_sla($dataFeriado, 2);
echo "Espera-se 2020-06-12 09:00" . PHP_EOL;
var_dump($t4);