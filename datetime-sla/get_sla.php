<?php

function is_horautil(\DateTime $data)
{
    $slaChamdo = $data->format('H:i:s');
    $inicioPrimeiroTurno = new DateTime('08:00:01');
    $fimPrimeiroTurno = new DateTime('11:45:01');
    $inicioSegundoTurno = new DateTime('13:00:01');
    $fimSegundoTurno = new DateTime('18:00:01');

    $inicioPrimeiroTurno = $inicioPrimeiroTurno->format('H:i:s');
    $fimPrimeiroTurno = $fimPrimeiroTurno->format('H:i:s');
    $inicioSegundoTurno = $inicioSegundoTurno->format('H:i:s');
    $fimSegundoTurno = $fimSegundoTurno->format('H:i:s');

    $diaDaSemana = $data->format('Y-m-d');
    $diaDaSemana = date('w', strtotime($diaDaSemana));

    if ($diaDaSemana == 0 && $diaDaSemana == 6) {
        return false;
    }
    if ($slaChamdo < $inicioSegundoTurno && $slaChamdo > $fimPrimeiroTurno) {
        return false;
    }
    if ($slaChamdo > $fimSegundoTurno) {
        return false;
    }
    if ($slaChamdo < $inicioPrimeiroTurno) {
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
    $prazo = new DateTime($inicio->format('Y-m-d H:i'));
    $i = 0;

    while ($i < $slaEmMinutos) {
        $prazo->add(new DateInterval('PT1M'));
        if (is_horautil($prazo)) {
            $i++;
        }
    }
    return $prazo;
}

