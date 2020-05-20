<?php

function get_recorrencia(\DateTime $inicio, $options)
{
    

 
    $dataInicial = new DateTime('2020-01-01'); //Data de criacao
    $dataDeRepeticao = new DateTime('2020-02-01'); //Data a ser repetida
    $intervaloDiario = new DateInterval('P1D');
    $intervaloSemanal = new DateInterval('P7D');
    $intervaloMensal = new DateInterval('P1M');
    $intervaloAnual = new DateInterval('P1Y');
    $dataFinal = new DateTime('2020-09-02'); //Data de encerramento
    $repeticao = 0;
    
    $periodo = new DatePeriod($dataDeRepeticao, $intervaloMensal, $dataFinal);
    
    $datas = [];
    foreach ($periodo as $data) {
            $datas[] = $data->format('d-m-Y');
            var_dump ($datas). "<br>";
    };
}

   // teste recorrenhecia quantidade

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

