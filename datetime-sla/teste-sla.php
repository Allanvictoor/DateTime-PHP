<?php
$inicio = new DateTime('2020-05-14 17:00:00');
$sla = new DateInterval('PT2H');
$vencimento = [];

foreach ($inicio as $util) {
    $horautil = clone $util;

    $inicioDoPrimeiroTurno = clone $horautil->setTime(7, 30, 0);
    $fimDoPrimeiroTurno = clone $horautil->setTime(11, 45, 0);
    $inicioDoSegundoTurno = clone $dhorautil->setTime(13, 0, 0);
    $fimDoSegundoTurno = clone $horautil->setTime(18, 0, 0);

    if (($inicioDoPrimeiroTurno < $util && $util < $fimDoPrimeiroTurno) || ($inicioDoSegundoTurno < $util && $util < $fimDoSegundoTurno)) {
        $vencimento[] = $inicio->add($sla);
}
print_r($vencimento);

}








