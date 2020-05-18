<?php

function is_horautil(\DateTime $data)
{
    $data = new Datetime();

    $inicioDoPrimeiroTurno->setTime(8, 0, 0);
    $fimDoPrimeiroTurno->setTime(11, 45, 0);
    $inicioDoSegundoTurno->setTime(13, 0, 0);
    $fimDoSegundoTurno->setTime(17, 0, 0);

    if (($inicioDoPrimeiroTurno < $data && $data < $fimDoPrimeiroTurno) || ($inicioDoSegundoTurno < $data && $data < $fimDoSegundoTurno)) {
        return true;;
    }
    
  
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

    

    $prazo = new DateTime($inicio->format('Y-m-d H:i'));
    var_dump($prazo);
    $i = 0;
    while ($i < $slaEmMinutos) {
        // - adicione 1 minuto em $prazo

        if (is_horautil($prazo)) {
            $i++;
        }
    }

    return $prazo;
}
