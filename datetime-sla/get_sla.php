<?php

function is_horautil(\DateTime $data)
{
    $slaChamado = $data->format('H:i:s');
    $diaDaSemana = $data->format('w');

    $inicioPrimeiroTurno = '08:00:00';
    $fimPrimeiroTurno = '11:45:00';
    $inicioSegundoTurno = '13:00:00';
    $fimSegundoTurno = '18:00:00';

    $diasNaoUteis = [0,6];

    if (in_array($diaDaSemana, $diasNaoUteis)) {
        return false;
    }
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
        $prazo->add(new DateInterval('PT1M'));
        if (is_horautil($prazo)) {
            $i++;
        }
    }
    return $prazo;
}

