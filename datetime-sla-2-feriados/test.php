<?php

include 'get_sla.php';
$dataFeriado = new DateTime('2020-06-10 17:00:00');

$t1 = get_sla($dataFeriado, 2);
echo "Espera-se 2020-06-12 09:00" . PHP_EOL;
var_dump($t1);

$t2 = get_sla($dataFeriado, 10);
echo "Espera-se 2020-06-15 08:15" . PHP_EOL;
var_dump($t2);