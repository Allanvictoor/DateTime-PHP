# Cálculo de SLA: agora com feriados!

### Informações Gerais

O exercício anterior tinha duas funções sendo ```get_sla()``` e ```is_horautil()```
 
Agora, serão 3 funções sendo:

- (1) get_sla
- (2) is_horautil
- (3) is_diautil
 
Tanto a função is_horautil quanto a função is_diautil deverão estar sendo chamadas dentro da função get_sla.
 
Detalhe importante: a função is_horautil não deverá mais perguntar sobre os dias úteis, apenas sobre as horas úteis e esta responsabilidade agora será da função is_diautil().
 
Assim sendo, a nova função is_diautil() deverá conter as regras de validação se o dia em questão é útil de acordo com os exemplos já mostrados anteriormente além de conter uma lista de feriados (em array conforme exemplo abaixo) que deverá ser levada em conta:
 
 ```php
 $feriados = ['2020-01-01', '2020-12-25']; // você pode incrementar a vontade aqui as datas
 ```
 
Apenas para esclarecer o problema, além do que já fora apresentado anteriormente, agora, se um dia for feriado, NÃO DEVERÁ contar prazo para SLA naquela data.


Ah! E sobre os testes? No exercício anterior só tínhamos dois testes escritos.

Escreva também um novo teste acrescentando um caso de uso que contemple um cenário que faça uso de um feriado para validar se a função atendeu o objetivo.
