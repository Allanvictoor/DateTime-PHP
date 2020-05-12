<?php
$dataInicial = new DateTime('2020-02-03');
$intervaloDiario = new DateInterval('P1D');
$intervaloSemanal = new DateInterval('P7D');
$intervaloMensal = new DateInterval('P1M');
$intervaloAnual = new DateInterval('P1Y');
$dataFinal = new DateTime('2020-09-05');

$periodo = new DatePeriod($dataInicial, $intervaloMensal, $dataFinal);


foreach ($periodo as $data) {
    echo $data->format('d-m-Y')."<br>";
}
?>  