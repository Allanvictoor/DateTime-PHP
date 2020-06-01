<?php


function get_recorrencia(\DateTime $inicio, $options)
{
    $data_inicio = clone $inicio;
    $data_final = new DateTime($options["termina_em"]);
    $diario = new DateInterval(' P1D');
    $semanal = new DateInterval('P1W');
    $mensal = new DateInterval('P1M');
    $anual = new DateInterval('P1Y');
    $dates_datafinal = [];
    $dates_quantidade = [];



        if ($options['frequencia'] == "diario") {

            $periodoDiario_date_final = new DatePeriod($data_inicio, $diario, $data_final);

            foreach ($periodoDiario_date_final as $data) {
                $dates_datafinal[] = new $data;


            }

            if (end($dates_datafinal) <= $data_final ) {
                array_push($dates_datafinal, $data_final);
            }
            print_r($dates_datafinal);


        }


        if ($options['frequencia'] == "semanal") {

            $periodoSemanal_date_final = new DatePeriod($data_inicio, $semanal, $data_final);

            foreach ($periodoSemanal_date_final as $data) {
                $dates_datafinal[] =$data;
            }
            if (end($dates_datafinal) <= $data_final ) {
                array_push($dates_datafinal, $data_final);
            }
            print_r($dates_datafinal);

        }


        if ($options['frequencia'] == "mensal") {

            $periodoMesal_date_final = new DatePeriod($data_inicio, $mensal, $data_final);

            foreach ($periodoMesal_date_final as $data) {

                $dates_datafinal[] = $data;


            }
            if (end($dates_datafinal) <= $data_final ) {
                array_push($dates_datafinal, $data_final);
            }
            print_r($dates_datafinal);


        }


        if ($options['frequencia'] == "anual") {

            $periodoAnual_date_final = new DatePeriod($data_inicio, $anual, $data_final);

            foreach ($periodoAnual_date_final as $data) {
                $dates_datafinal[] = $data;
            }
            if (end($dates_datafinal) <= $data_final ) {
                array_push($dates_datafinal, $data_final);
            }
            print_r($dates_datafinal);


        }






        if ($options['frequencia'] == 'semanal') {
            $quantidade_semanal = new DatePeriod($data_inicio, $semanal, $options['quantidade']);
            foreach ($quantidade_semanal as $data) {
                $dates_quantidade[] = $data;
            }
            print_r($dates_quantidade);
        }







        return $dates_datafinal;
        return $dates_quantidade;




}

