<?php

function get_recorrencia(\DateTime $inicio, $options)
{
    if ($options['quantidade'] == null && $options['termina_em'] == null ) {
        throw new \Exception('A quantidade ou a data final devem ser passada');
    }
    if ($options['quantidade'] != null && (($options['quantidade'] > 1000 || $options['quantidade'] < 0))) {
        throw new \Exception('A quantidade não deve ser zero e deve ser menor ou igual a 1000');
    }

    switch ($options['frequencia']) {
        case 'diario':
            $periodo = new DateInterval('P1D');
            break;
        case 'semanal':
            $periodo = new DateInterval('P1W');
            break;
        case 'mensal':
            $periodo = new DateInterval('P1M');
            break;
        case 'anual':
            $periodo = new DateInterval('P1Y');
            break;
        default:
            throw new \Exception('É necesario passar a frequência');
    }

    if ($options['quantidade'] == NULL && $options['termina_em'] != NULL) {
        $fim = new DateTime($options['termina_em']);
        $fim = $fim->add($periodo);
    }
    if ($options['quantidade'] != NULL && $options['termina_em'] == NULL) {
        $fim = $options['quantidade'] - 1;
    }

    $recorrencia = new DatePeriod($inicio, $periodo, $fim);
    $dates = [];

    foreach ($recorrencia as $data) {
        $dates[] = $data;
    }
    return $dates;
}