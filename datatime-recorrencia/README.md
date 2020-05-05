# Repetição em datas de agenda com DateTime do PHP

### Informações Gerais

#### Projeto Base
Junto a esta missão você está recebendo uma documentação com os dados referentes à configuração de repetição e também um script php que servirá para testar a função que irá desenvolver.

#### Resultado Esperado
Um evento de agenda pode ter uma repetição. A repetição por sua vez pode ser configurada com várias características como início e término da repetição, periodicidade da repetição como diária, semanal, mensal, anual dentre outras configurações. É esperado que seja desenvolvida uma função que receba (1) uma data de início, e (2) a configuração de uma repetição e em seguida ela retorne um array de datas baseados nesta repetição.

#### Jornadas Necessárias ou Recomendadas
- Laços de Repetição em PHP (necessário)
- DateTime em PHP (necessário)

#### Missões Necessárias ou Recomendadas:
- não informado

### Mapa de Desenvolvimento

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

#### Testes de Mesa

---

##### Exemplo 1
Entrada:
```php
$dataInicio = new \DateTime();
$dataInicio->setDate(2020, 02, 03);
$datas = calcularRepeticoes($dataInicio, [
  'frequencia' => 'mensal',
  'por_dia_mes' => 1,
  'termina_em': '2020-09-01'
]);
```

Saída:
```php
array(8) {
  [0] => 01/02/2020
  [1] => 01/03/2020
  [2] => 01/04/2020
  [3] => 01/05/2020
  [4] => 01/06/2020
  [5] => 01/07/2020
  [6] => 01/08/2020
  [7] => 01/09/2020
}
```

---

##### Exemplo 2

Entrada:
```php
$dataInicio = new \DateTime();
$dataInicio->setDate(2020, 02, 03);
$datas = calcularRepeticoes($dataInicio, [
  'frequencia' => 'semanal',
  'por_dia_mes' => 1,
  'quantidade' => 3
}
```

Saída:
```php
array(3) {
  [0] => 03/02/2020
  [1] => 10/03/2020
  [2] => 17/03/2020
```

