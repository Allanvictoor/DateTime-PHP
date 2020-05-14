<?php

function get_sla(\DateTime $inicio, $sla)
{
    if (! is_numeric($sla)) {
        throw new \Exception('Informe um valor inteiro para SLA');
    }
    $sla = (int) $sla;

    

    $prazo = new \DateTime();

    //
    // mexa até aqui

    return $prazo;
}
