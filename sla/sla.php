<?php

$dataInicial = new DateTime('2020-05-14 14:00:00');
$prazo = new DateInterval('PT2880M');
$vencimento = $dataInicial->add($prazo);
$periodo = new DatePeriod($dataInicial, $prazo, $vencimento);
$minutos = 0;

foreach ($periodo as $data) {

    $dataEmMinuto = clone $data;

    $inicioDoPrimeiroTurno = clone $dataEmMinuto->setTime(8, 0, 0);
    $fimDoPrimeiroTurno = clone $dataEmMinuto->setTime(11, 45, 0);
    $inicioDoSegundoTurno = clone $dataEmMinuto->setTime(13, 0, 0);
    $fimDoSegundoTurno = clone $dataEmMinuto->setTime(18, 0, 0);

    if (($inicioDoPrimeiroTurno < $data && $data < $fimDoPrimeiroTurno) || ($inicioDoSegundoTurno < $data && $data < $fimDoSegundoTurno)) {
            $minutos++;
    }
    print_r ($minutos);
}




// echo $vencimento->format('d-m-Y H:i:s')

?>