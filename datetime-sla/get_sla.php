<?php

function is_horautil(\DateTime $data)
{
    // retorne true/false se a data/hora for útil
    // de acordo com regras já definidas para projeto
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
    if (! is_numeric($sla)) {
        throw new \Exception('Informe um valor inteiro para SLA');
    }
    $sla = (int) $sla;

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
