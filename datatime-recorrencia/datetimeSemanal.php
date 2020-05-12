
<!-- Baseado no exemplo 2 -->

<?php
$dataInicial = new DateTime('2020-02-03');
$intervaloDiario = new DateInterval('P1D');
$intervaloSemanal = new DateInterval('P7D');
$intervaloMensal = new DateInterval('P1M');
$intervaloAnual = new DateInterval('P1Y');
$quantidade = 3;

$periodo = new DatePeriod($dataInicial, $intervaloSemanal, $quantidade);

$count = 1;
foreach ($periodo as $data) {
    if ($count <= $quantidade) {
        echo $data->format('d-m-Y') . "<br>";
    }
    $count++;
}
?>  

