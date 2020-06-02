<?php


function get_recorrencia(\DateTime $inicio, $options)
{
    $data_inicio = clone $inicio;
    $data_inicio_recorrencia = clone $inicio;
    $por_dia_mes = $options['por_dia_mes'];
    $por_dia = $options['por_dia'];
    $data_inicio->setDate('2020','02', $por_dia_mes);
    $data_inicio_recorrencia->setDate('2020','02', $por_dia);
    $data_final = new DateTime($options["termina_em"]);
    $diario = new DateInterval(' P1D');
    $semanal = new DateInterval('P1W');
    $mensal = new DateInterval('P1M');
    $anual = new DateInterval('P1Y');
    $dates = [];





        if ($options['frequencia'] == "diaria" && $options['quantidade'] == null) {

            $periodo = new DatePeriod($data_inicio, $diario, $data_final);

            foreach ($periodo as $data) {

                $dates[] = $data;


            }
            if (end($dates ) <= $data_final ) {
                array_push($dates , $data_final);
            }
            print_r($dates);


        }




        if ($options['frequencia'] == "semanal" && $options['quantidade'] == null) {

            $periodo = new DatePeriod($data_inicio, $semanal, $data_final);

            foreach ($periodo as $data) {

                $dates[] = $data;


            }
            if (end($dates ) <= $data_final ) {
                array_push($dates , $data_final);
            }
            print_r($dates);


        }

        if ($options['frequencia'] == "mensal" && $options['quantidade'] == null) {

            $periodo = new DatePeriod($data_inicio, $mensal, $data_final);

            foreach ($periodo as $data) {

                $dates[] = $data;


            }
            if (end($dates ) <= $data_final ) {
                array_push($dates , $data_final);
            }
            print_r($dates);


        }

        if ($options['frequencia'] == "anual" && $options['quantidade'] == null) {

            $periodo = new DatePeriod($data_inicio, $anual, $data_final);

            foreach ($periodo as $data) {

                $dates[] = $data;


            }
            if (end($dates ) <= $data_final ) {
                array_push($dates , $data_final);
            }
            print_r($dates);


        }


        if ($options['frequencia'] == 'diario' && $options['termina_em'] == null) {
            $quantidade = $options['quantidade'];
            $quantidade = $quantidade - 1;
            $periodo = new DatePeriod($data_inicio_recorrencia, $diario, $quantidade);
            foreach ($periodo as $data) {
                $dates[]  = $data;
            }
            print_r($dates);
        }

        if ($options['frequencia'] == 'semanal' && $options['termina_em'] == null) {
            $quantidade = $options['quantidade'];
            $quantidade = $quantidade - 1;
            $periodo = new DatePeriod($data_inicio_recorrencia, $semanal, $quantidade);
            foreach ($periodo as $data) {
                $dates[]  = $data;
            }
            print_r($dates);
        }

        if ($options['frequencia'] == 'mensal' && $options['termina_em'] == null) {
            $quantidade = $options['quantidade'];
            $quantidade = $quantidade - 1;
            $periodo = new DatePeriod($data_inicio_recorrencia, $mensal, $quantidade);
            foreach ($periodo as $data) {
                $dates[]  = $data;
            }
            print_r($dates);
        }

        if ($options['frequencia'] == 'anual' && $options['termina_em'] == null) {
            $quantidade = $options['quantidade'];
            $quantidade = $quantidade - 1;
            $periodo = new DatePeriod($data_inicio_recorrencia, $anual, $quantidade);
            foreach ($periodo as $data) {
                $dates[]  = $data;
            }
            print_r($dates);
        }

        return $dates ;




}

