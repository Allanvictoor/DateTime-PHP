<?php


function get_recorrencia(\DateTime $inicio, $options)
{



    $datas = [];
    if($options == 'diaria') {

        if($options->termina_em != null) {

            while($inicio <= $options->termina_em) {

                if($options->por_mes != null) {

                }
                if($options->por_dia != null) {

                }
                if($options->por_dia_mes != null) {

                }

                $inicio = $inicio->add(new DateInterval('P1D'));
            }

            return $datas;


            exit();

        }

    }

}