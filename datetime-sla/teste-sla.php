<?php
// $inicio = new DateTime('2020-05-14 17:00:00');
// $sla = 8;
// $slaMinutos = $sla * 60;
// $turnoMinutos = 525;

// $teste = $turnoMinutos - $slaMinutos;
// echo $teste;

$datatime1 = new DateTime('2020-05-18 14:00:00');


$intervaloEmMinuto = new DateInterval('PT1M');
$periodo = new DatePeriod($datatime1, $intervaloEmMinuto, $datatime2);
$minutos = 525;
foreach ($periodo as $data) {
        $dataEmMinuto = clone $data;

        $inicioDoPrimeiroTurno = clone $dataEmMinuto->setTime(8, 0, 0);
        $fimDoPrimeiroTurno = clone $dataEmMinuto->setTime(11, 45, 0);
        $inicioDoSegundoTurno = clone $dataEmMinuto->setTime(13, 0, 0);
        $fimDoSegundoTurno = clone $dataEmMinuto->setTime(18, 0, 0);

        if (($inicioDoPrimeiroTurno < $data && $data < $fimDoPrimeiroTurno) || ($inicioDoSegundoTurno < $data && $data < $fimDoSegundoTurno)) {
                $minutos++;
        }
}


$intervalo = new DateInterval("PT{$minutos}M");
$intervalo->add(new DateTime($datatime1));


print_r($intervalo);


