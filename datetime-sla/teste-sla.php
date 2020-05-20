<?php
// $inicio = new DateTime('2020-05-14 17:00:00');
// $sla = new DateInterval('PT2H');


// foreach ($inicio as $util) {
//     $horautil = clone $util;

//     $inicioDoPrimeiroTurno = clone $horautil->DateTime(7, 30, 0);
//     $fimDoPrimeiroTurno = clone $horautil->DateTime(11, 45, 0);
//     $inicioDoSegundoTurno = clone $dhorautil->DateTime(13, 0, 0);
//     $fimDoSegundoTurno = clone $horautil->DateTime(18, 0, 0);

//     if (($inicioDoPrimeiroTurno < $util && $util < $fimDoPrimeiroTurno) || ($inicioDoSegundoTurno < $util && $util < $fimDoSegundoTurno)) {
//         $minutos++;
// }


// }





function diasemana($data) {
    $ano =  substr("$data", 0, 4);
    $mes =  substr("$data", 5, -3);
    $dia =  substr("$data", 8, 9);

    $diasemana = date("w", mktime(0,0,0,$mes,$dia,$ano) );

    switch($diasemana) {
        case"0": $diasemana = "Domingo";       break;
        case"1": $diasemana = "Segunda-Feira"; break;
        case"2": $diasemana = "Terça-Feira";   break;
        case"3": $diasemana = "Quarta-Feira";  break;
        case"4": $diasemana = "Quinta-Feira";  break;
        case"5": $diasemana = "Sexta-Feira";   break;
        case"6": $diasemana = "Sábado";        break;
    }

    echo "$diasemana";
}

//Exemplo de uso
diasemana("2020-05-16");


