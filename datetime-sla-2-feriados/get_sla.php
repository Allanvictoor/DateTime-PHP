<?php

function is_diautil(\DateTime $data) {

    $diasNaoUteis = [0,6];
    if (in_array($data->format('w'), $diasNaoUteis)) {
        return false;
    }

    $feriados = ['2020-01-01', '2020-02-24', '2020-02-25', '2020-04-10', '2020-05-01', '2020-06-11',
        '2020-09-07', '2020-10-12', '2020-11-20', '2020-11-15', '2020-12-25'];
    if (in_array($data->format('Y-m-d'), $feriados)) {
        return false;
    }

    return  true;
}

function is_horautil(\DateTime $data)
{
    $slaChamado = $data->format('H:i:s');

    $inicioPrimeiroTurno = '08:00:00';
    $fimPrimeiroTurno = '11:45:00';
    $inicioSegundoTurno = '13:00:00';
    $fimSegundoTurno = '18:00:00';

    if ($slaChamado < $inicioSegundoTurno && $slaChamado >= $fimPrimeiroTurno) {
        return false;
    }
    if ($slaChamado >= $fimSegundoTurno) {
        return false;
    }
    if ($slaChamado < $inicioPrimeiroTurno) {
        return false;
    }
    return true;
}
/**
 * @param \DateTime $inicio data de início
 * @param int $sla SLA em horas
 * @return \DateTime data prazo limite com SLA
 * @throws Exception
 */
function get_sla(\DateTime $inicio, $sla)
{
    if (!is_numeric($sla)) {
        throw new \Exception('Informe um valor inteiro para SLA');
    }

    $sla = (int) $sla;
    $slaEmMinutos = $sla * 60;
    $prazo = clone $inicio;
    $i = 0;

    while ($i < $slaEmMinutos) {
        if (!is_diaUtil($prazo)) {
            $prazo->modify('+1 day');
            continue;
        }

        if (is_horautil($prazo)) {
            $i++;
        }
        $prazo->add(new DateInterval('PT1M'));
    }
    return $prazo;
}

