<?php


function get_recorrencia(\DateTime $inicio, $options)
{

    $data_inicio = clone $inicio;
    $repete_em = new DateTime();
    $data_final = new DateTime('2020-09-30');
    $diario = new DateInterval(' P1D');
    $semanal = new DateInterval('P1W');
    $mensal = new DateInterval('P1M');
    $anual = new DateInterval('P1Y');
    $quantidade = 4;
    $dates = [];

    if ($options == $data_final) {
        if ($inicio != null && $options == $diario && !$quantidade) {

            $periodoDiario_date_final = new DatePeriod($data_inicio, $diario, $data_final);


            foreach ($periodoDiario_date_final as $data) {
                $dates[] = $data->format('d-m-Y');
            }
            return $dates;

        }

        if ($inicio != null && $options == $semanal && !$quantidade) {

            $periodoSemanal_date_final = new DatePeriod($data_inicio, $semanal, $data_final);

            foreach ($periodoSemanal_date_final as $data) {
                $dates[] = $data->format('Y-m-d');
            }
            return $dates;
        }

        if ($inicio != null && $options == $mensal && !$quantidade) {

            $periodoMesal_date_final = new DatePeriod($data_inicio, $mensal, $data_final);

            foreach ($periodoMesal_date_final as $data) {
                $dates[] = $data->format('Y-m-d');
            }
            return $dates;
        }

        if ($inicio != null && $options == $anual && !$quantidade) {

            $periodoAnual_date_final = new DatePeriod($data_inicio, $anual, $data_final);

            foreach ($periodoAnual_date_final as $data) {
                $dates[] = $data->format('Y-m-d');
            }
            return $dates;

        }

    }

    if ($options == $quantidade) {

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
    print_r($dates);
    exit();
}