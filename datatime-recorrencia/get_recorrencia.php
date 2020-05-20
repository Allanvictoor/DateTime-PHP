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
    $quantidade = 3;
    
    $periodo = new DatePeriod($dataDeRepeticao, $intervaloMensal, $dataFinal);
    $periodoQuant = new DatePeriod($dataDeRepeticao, $intervaloSemanal, $quantidade);

    $count = [];
    $datas = [];
    foreach ($periodo as $data) {
        if ($datas < $dataFinal) {
            $datas[] = $data->format('d-m-Y');
        

        }
        $datas++;
        var_dump ($datas). "<br>";
        
        
        
    }

    foreach ($periodoQuant as $data2) {
        if ($count <= $periodoQuant) {
            $count[] = $data2->format('d-m-Y') . "<br>";
        }
        $count++;
    }

   
    
    return $data;
    
}

  

