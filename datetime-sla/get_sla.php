<?php

function is_horautil(\DateTime $data ) {

    $data_inicio = clone $data;
    $confere_dia = $data_inicio->format('Y-m-d');
    $confere_dia = date('w', strtotime($confere_dia));

    $inicioDoPrimeiroTurno = clone $data_inicio->setTime(8, 0, 0);
    $fimDoPrimeiroTurno = clone $data_inicio->setTime(11, 45, 0);
    $inicioDoSegundoTurno = clone $data_inicio->setTime(13, 0, 0);
    $fimDoSegundoTurno = clone $data_inicio->setTime(18, 0, 0);


    if ($data_inicio > $inicioDoPrimeiroTurno && $data_inicio < $fimDoPrimeiroTurno) {
        return true;
    }
    if ($data_inicio > $inicioDoSegundoTurno && $data_inicio < $fimDoSegundoTurno) {
        return true;
    }

    if($confere_dia == 0 || $confere_dia == 6){
        return false;
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


