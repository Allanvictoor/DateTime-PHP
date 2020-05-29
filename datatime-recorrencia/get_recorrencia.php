<?php


function get_recorrencia(\DateTime $inicio, $options)
{

    $data_inicio = clone $inicio;
    $data_final = new DateTime($options["termina_em"]);
    $repete_todo_dia =  $options["por_dia_mes"];
    $data_inicio->setDate("NOW","NOW", "intval($repete_todo_dia)");
    print_r($data_inicio);
    exit();
    $diario = new DateInterval(' P1D');
    $semanal = new DateInterval('P1W');
    $mensal = new DateInterval('P1M');
    $anual = new DateInterval('P1Y');
    $quantidade = 3;
    $dates = [];






        if ($options['frequencia'] == "diario") {

            $periodoDiario_date_final = new DatePeriod($data_inicio, $diario, $data_final);

            foreach ($periodoDiario_date_final as $data) {
                $dates[] = $data->format('d-m-Y');


            }

            print_r($dates);


        }

        if ($options['frequencia'] == "semanal") {

            $periodoSemanal_date_final = new DatePeriod($data_inicio, $semanal, $data_final);

            foreach ($periodoSemanal_date_final as $data) {
                $dates[] = $data->format('Y-m-d');
            }
            print_r($dates);

        }

        if ($options['frequencia'] == "mensal") {

            $periodoMesal_date_final = new DatePeriod($data_inicio, $mensal, $data_final);

            foreach ($periodoMesal_date_final as $data) {
                $dates[] = $data->format('Y-m-d');

            }
            print_r($dates);

        }

        if ($options['frequencia'] == "anual") {

            $periodoAnual_date_final = new DatePeriod($data_inicio, $anual, $data_final);

            foreach ($periodoAnual_date_final as $data) {
                $dates[] = $data->format('Y-m-d');
            }
            print_r($dates);


        }







    else {

        if ($inicio != null && $options == $diario && $quantidade == true) {

            $periodoDiario_quantidade = new DatePeriod($data_inicio, $diario, $quantidade);

            foreach ($periodoDiario_quantidade as $data) {
                $dates[] = $data->format('d-m-Y');
            }
            return $dates;

        }

        if ($inicio != null && $options == $semanal && $quantidade == true) {

            $periodoSemanal_quantidade = new DatePeriod($data_inicio, $semanal, $quantidade);

            foreach ($periodoSemanal_quantidade as $data) {
                $dates[] = $data->format('Y-m-d');
            }
            return $dates;
        }

        if ($inicio != null && $options == $mensal && $quantidade == true) {

            $periodoMensal_quantidade = new DatePeriod($data_inicio, $mensal, $quantidade);

            foreach ($periodoMensal_quantidade as $data) {
                $dates[] = $data->format('Y-m-d');
            }
            return $dates;
        }

        if ($inicio != null && $options == $anual && $quantidade == true) {

            $periodoAnual_quantidade = new DatePeriod($data_inicio, $anual, $quantidade);

            foreach ($periodoAnual_quantidade as $data) {
                $dates[] = $data->format('Y-m-d');
            }
            return $dates;

        }

    }

}