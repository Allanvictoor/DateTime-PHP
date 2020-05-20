<?php

function is_horautil(\DateTime $data)
{
    $horautil = clone $data;

    $inicioDoPrimeiroTurno = clone $horautil->setTime(8, 0, 0);
    $fimDoPrimeiroTurno = clone $horautil->setTime(11, 45, 0);
    $inicioDoSegundoTurno = clone $horautil->setTime(13, 0, 0);
    $fimDoSegundoTurno = clone $horautil->setTime(18, 0, 0);

    if (($inicioDoPrimeiroTurno < $horautil && $horautil < $fimDoPrimeiroTurno) || ($inicioDoSegundoTurno < $horautil && $horautil < $fimDoSegundoTurno)) {
        return true;
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
<<<<<<< HEAD

<<<<<<< HEAD
    
=======
    // ao converter pra minutos, podemos facilitar as coisas
    $slaEmMinutos = $sla * 60;
>>>>>>> upstream/master

=======
    $slaEmMinutos = $sla * 60;
    
>>>>>>> 79a8c83f1f0f23b7b4794a323fcf3929e3e0df80
    $prazo = new DateTime($inicio->format('Y-m-d H:i'));
    $i = 0;
    while ($i < $slaEmMinutos) {
        // - adicione 1 minuto em $prazo

        if (is_horautil($prazo)) {
            $i++;
        }
    
    }

    return $prazo;


}
