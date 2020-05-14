<?php

function get_recorrencia(\DateTime $inicio, $options)
{
    $datas = [];

 
    $dataInicial = new DateTime('2020-01-01'); //Data de criacao
    $dataRepeticao = new DateTime ('2020-01-03'); // Data de repeticao
    $intervaloDiario = new DateInterval('P1D');
    $intervaloSemanal = new DateInterval('P7D');
    $intervaloMensal = new DateInterval('P1M');
    $intervaloAnual = new DateInterval('P1Y');
    $dataFinal = new DateTime('2020-12-04'); //Data de encerramento
    
    $periodo = new DatePeriod($dataRepeticao, $intervaloMensal, $dataFinal);
    

    foreach ($periodo as $data) {
            echo $data->format('d-m-Y') . "<br>";
        
    }

   // teste 2

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

    return $datas;
}
