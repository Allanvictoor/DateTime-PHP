<?php

function is_horautil(\DateTime $data ) {

    $inicioPrimeiroTurno = clone $data->setTime(8, 0, 0);
    $fimPrimeiroTurno = clone $data->setTime(11, 45, 0);
    $inicioSegundoTurno = clone $data->setTime(13, 0, 0);
    $fimSegundoTurno = clone $data->setTime(18, 0, 0);

    if (($data > $inicioPrimeiroTurno && $data < $fimPrimeiroTurno) || ($data > $inicioSegundoTurno && $data < $fimSegundoTurno)) {
        return true;
    }

    return $data;

}


/**
 * @param \DateTime $inicio data de início
 * @param int $sla SLA em horas
 * @return \DateTime data prazo limite com SLA
 * @throws Exception
 */
function get_sla(\DateTime $inicio, $sla)
{
    if (! is_numeric($sla)) {
        throw new \Exception('Informe um valor inteiro para SLA');
    }
    $sla = (int) $sla;
    // ao converter pra minutos, podemos facilitar as coisas
    $slaEmMinutos = $sla * 60;
    $prazo = new DateTime($inicio->format('Y-m-d H:i'));
    $i = 0;
    while ($i < $slaEmMinutos) {
        
            if( is_horautil($prazo)) {
                $i++;
            }
    
    }

    return $prazo->add(new DateInterval("PT{$i}M"));


}
