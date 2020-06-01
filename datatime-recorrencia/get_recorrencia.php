<?php


function get_recorrencia(\DateTime $inicio, $options)
{

    $data_inicio = clone $inicio;
    $data_final = new DateTime($options["termina_em"]);
    $diario = new DateInterval(' P1D');
    $semanal = new DateInterval('P1W');
    $mensal = new DateInterval('P1M');
    $anual = new DateInterval('P1Y');
    $quantidade = 3;
    $dates = [];




        if ($options['frequencia'] == "diario") {

            $periodoDiario_date_final = new DatePeriod($data_inicio, $diario, $data_final);

            foreach ($periodoDiario_date_final as $data) {
                $dates[] = $data;


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
                $dates[] = new DateTime($data);
            }
            print_r($dates);


        }


        if (!$options["termina_em"] && $options["frequencia"] == "diario") {
            $quantidade_diaria = new DatePeriod($data_inicio, $diario, $quantidade);

            foreach ($quantidade_diaria as $data) {
                $dates[] = new DateTime($data);
            }
            print_r($dates);
        }


        if (!$options["termina_em"] && $options["frequencia"] == "semanal") {
            $quantidade_semanal = new DatePeriod($data_inicio, $diario, $quantidade);

            foreach ($quantidade_semanal as $data) {
                $dates[] = new DateTime($data);
            }
            print_r($dates);
        }


        if (!$options["termina_em"] && $options["frequencia"] == "mensal") {
            $quantidade_mensal = new DatePeriod($data_inicio, $diario, $quantidade);

            foreach ($quantidade_mensal as $data) {
                $dates[] = new DateTime($data);
            }
            print_r($dates);
        }


        if (!$options["termina_em"] && $options["frequencia"] == "anual") {
            $quantidade_anual = new DatePeriod($data_inicio, $diario, $quantidade);

            foreach ($quantidade_anual as $data) {
                $dates[] = $data;
            }
            print_r($dates);
        }





}

