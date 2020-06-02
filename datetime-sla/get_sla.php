<?php

function is_horautil(\DateTime $data ) {

        if ($data > new DateTime('8:0:0')) {
            return true;
        }
        if ($data < new DateTime('11:45:0')) {
            return true;
        }
        if ($data > new DateTime('13:0:0')) {
            return true;
        }
        if ($data < new DateTime('18:0:0')) {
            return true;
        }
        else {
            throw new \Exception('Erro');
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
    $slaEmMinutos = $sla * 60;
    $prazo = clone $inicio;
    $i = 0;
    if (is_horautil($inicio)) {
        while ($i <= $slaEmMinutos) {
            $i++;
        }
            $prazo->add(new DateInterval("PT{$i}M"));

    }


         return $prazo;

}
