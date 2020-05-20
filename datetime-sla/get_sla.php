<?php

function is_horautil(\DateTime $data)
{
    $horautil = clone $data;

    $inicioDoPrimeiroTurno = clone $horautil->setTime(8, 0, 0);
    $fimDoPrimeiroTurno = clone $horautil->setTime(11, 45, 0);
    $inicioDoSegundoTurno = clone $horautil->setTime(13, 0, 0);
    $fimDoSegundoTurno = clone $horautil->setTime(18, 0, 0);

    if (($inicioDoPrimeiroTurno < $data && $data < $fimDoPrimeiroTurno) || ($inicioDoSegundoTurno < $data && $data < $fimDoSegundoTurno)) {
        return true;
    }
 
     else  {
     return false;
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
    // ao converter pra minutos, podemos facilitar as coisas
    $slaEmMinutos = $sla * 60;
    $prazo = new DateTime($inicio->format('Y-m-d H:i'));
    $i = 0;
    while ($i < $slaEmMinutos) {
        
        if (is_horautil($prazo)) {
            $i++;
            
        }
       
        $minutos = new DateInterval("PT{$i}M");
        $prazo->add($minutos);
    
    
    }

    return $prazo;


}
