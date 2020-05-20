# Repetição em datas de agenda com DateTime do PHP

### Informações Gerais

#### Projeto Base
Junto a esta missão você está recebendo uma documentação com os dados referentes à configuração de repetição e também um ![script php](https://github.com/vivaweb/missoes-php/blob/master/datatime-recorrencia/test.php) que servirá para testar a função que irá desenvolver.

#### Resultado Esperado
Um evento de agenda pode ter uma repetição. A repetição por sua vez pode ser configurada com várias características como início e término da repetição, periodicidade da repetição como diária, semanal, mensal, anual dentre outras configurações. É esperado que seja desenvolvida uma função que receba (1) uma data de início, e (2) a configuração de uma repetição e em seguida ela retorne um array de datas baseados nesta repetição.

#### Jornadas Necessárias ou Recomendadas
- Laços de Repetição em PHP (necessário)
- DateTime em PHP (necessário)

#### Missões Necessárias ou Recomendadas:
- não informado

### Mapa de Desenvolvimento

O seu código precisa ser adicionado no script get_reccorrencia.php dentro da função get_recorrencia.

Ao receber uma data de início, exemplo '2020-01-20' e uma configuração de repetição você deverá retornar à chamada com um array de datas. Uma repetição (que será um array) poderá ter as seguintes configurações:
- frequencia: (string) diaria|semanal|mensal|anual
- por_dia: (integer) 1-7 <br>Representa os dias da semana de segunda à domingo
- por_mes: (integer) 1 a 12 <br>Representa os meses do ano de janeiro a dezembro
- por_dia_mes: (integer) 1-31 <br> Representa os dias do mês de 01 a 31
- termina_em: (datetime) <br>uma data para término da repetição
- quantidade: (integer) 0-1000 <br>um número de repetições desejadas.

Observações:
- No uso da configuração por_dia_mes em meses que não tiverem 30 ou 31 dias, você precisa jogar para o próximo dia válido.
- No uso da configuração quantidade esta se sobrepõe a data de término, se informada.
- A configuração quantidade ou termina_em devem ser informados obrigatoriamente para uma repetição.
- Você pode criar outras funções no projeto mas não pode alterar a declaração da função get_recorrencia no arquivo get_recorrencia.php

#### Testes de Mesa

---

É preciso que ao executar ```php test.php``` seja apresentada a mensagem de sucesso em sua tela. Enquanto uma Exception estiver sendo mostrada é sinal que há algum problema com a repetição. Não altere o script de testes pois ele pode sofrer melhorias ao longo do tempo.

##### Exemplo 1
```php
$inicio1 = new \DateTime('2020-02-01');

$recorrencia1 = [
  'frequencia' => 'mensal',
  'por_dia_mes' => 1,
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

```

---

##### Exemplo 2

```php
$inicio2 = new \DateTime('2020-02-03');

$recorrencia2 = [
  'frequencia' => 'semanal',
  'por_dia' => 1,
  'quantidade' => 3
];

$resultadoEsperado2 = [
    new \DateTime('2020-02-03'),
    new \DateTime('2020-02-10'),
    new \DateTime('2020-02-17'),
];
```

---
---
---
Desenvolvido por:

![Vivaweb](https://avatars2.githubusercontent.com/u/6058802?s=200&v=4)
