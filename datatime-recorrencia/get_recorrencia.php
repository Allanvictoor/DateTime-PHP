<?php


function get_recorrencia(\DateTime $inicio, $options)
{
    $dataInicioRecorrencia = clone $inicio;
    $inicio->setDate($inicio, $inicio, $options['por_dia_mes']);

    $diario = new DateInterval(' P1D');
    $semanal = new DateInterval('P1W');
    $mensal = new DateInterval('P1M');
    $anual = new DateInterval('P1Y');

    $dates = [];

    if ($options['termina_em'] == true) {
        if ($options['frequencia'] == 'diaria') {
            $periodo = new DatePeriod($inicio, $diario, $options['termina_em']);
        }
        if ($options['frequencia'] == 'semanal') {
            $periodo = new DatePeriod($inicio, $semanal, $options['termina_em']);
        }
        if ($options['frequencia'] == 'mensal') {
            $periodo = new  DatePeriod($inicio, $mensal, $options['termina_em']);
        }
        if ($options['frequencia'] == 'anual') {
            $periodo = new DatePeriod($inicio, $anual, $options['termina_em']);
        }
        foreach ($periodo as $data) {
            $dates[] = $data;
        }
    }
    return $dates;
}