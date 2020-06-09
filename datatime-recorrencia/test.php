<?php

include 'get_recorrencia.php';

// Teste 1

$inicio1 = new \DateTime('2020-02-01');
$recorrencia1 = [
  'frequencia' => 'mensal',
  'termina_em'=> '2020-09-01'
];
$resultadoEsperado1 = [
    new \DateTime('2020-02-01'),
    new \DateTime('2020-03-01'),
    new \DateTime('2020-04-01'),
    new \DateTime('2020-05-01'),
    new \DateTime('2020-06-01'),
    new \DateTime('2020-07-01'),
    new \DateTime('2020-08-01'),
    new \DateTime('2020-09-01')
];

$datas1 = get_recorrencia($inicio1, $recorrencia1);
if ($datas1 != $resultadoEsperado1) {
    throw new \Exception('Não passou no teste 1');
}

// Teste 2

$inicio2 = new \DateTime('2020-02-03');
$recorrencia2 = [
  'frequencia' => 'semanal',
  'por_dia' => 3,
  'quantidade' => 3
];
$resultadoEsperado2 = [
    new \DateTime('2020-02-03'),
    new \DateTime('2020-02-10'),
    new \DateTime('2020-02-17'),
];

$datas2 = get_recorrencia($inicio2, $recorrencia2);
if ($datas2 != $resultadoEsperado2) {
    throw new \Exception('Não passou no teste 2');
}

echo "Passou nos dois primeiros testes";
