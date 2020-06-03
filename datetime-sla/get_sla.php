<?php

function is_horautil(\DateTime $data ) {

    $dataEmMinuto = clone $data;

    $inicioDoPrimeiroTurno = clone $dataEmMinuto->setTime(8, 0, 0);
    $fimDoPrimeiroTurno = clone $dataEmMinuto->setTime(11, 45, 0);
    $inicioDoSegundoTurno = clone $dataEmMinuto->setTime(13, 0, 0);
    $fimDoSegundoTurno = clone $dataEmMinuto->setTime(18, 0, 0);

    if ($dataEmMinuto > $inicioDoPrimeiroTurno && $dataEmMinuto < $fimDoPrimeiroTurno) {
        return true;
    }
    if ($dataEmMinuto > $inicioDoSegundoTurno && $dataEmMinuto < $fimDoSegundoTurno) {
        return true;
    }
    return false;

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
        $sla = (int)$sla;

        // ao converter pra minutos, podemos facilitar as coisas
        $slaEmMinutos = $sla * 60;

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


