# Cálculo de SLA em uma data

### Informações Gerais

#### Projeto Base
Junto a esta missão você está recebendo uma documentação com os dados necessários
para entender o que é um cálculo de SLA e alguns exemplos.  

#### Resultado Esperado
Recebido uma data e a quantidade de minutos de um contrato de SLA,
sua função deve estar preparada para calcular o tempo em horas úteis,
ou seja, levando em conta apenas o horário de trabalho da empresa
e em seguida retornando o prazo (data e hora) de acordo com o SLA informado.

#### Jornadas Necessárias ou Recomendadas
- Laços de Repetição em PHP (necessário)
- DateTime em PHP (necessário)

#### Missões Necessárias ou Recomendadas:
- Repetição de Datas

### Mapa de Desenvolvimento

Imagine o seguinte cenário:

- Um chamado de suporte foi aberto por um cliente em segunda-feira, 11/05/2020 às 13:30
e este cliente possui um contrato de SLA com a empresa no qual o prazo para 
atendimento dos chamados é de 2 horas úteis.

- Se esta empresa trabalha de segunda à sexta, das 08:00 às 11:45 e 13:00 às 18:00,
com base no horário da abertura, acrescido duas horas úteis teríamos um resultado
de 11/05/2020 às 15:30.

- Contudo, baseando-se no mesmo exemplo, se o SLA for de 8 horas, o resultado
seria de 12/05/2020 às 11:30.

Observações:
- Esta empresa trabalha das 08:00 às 11:45 e das 13:00 às 18:00 de segunda à sexta.
- Esta empresa não trabalha aos sábados e domingos.
- Horas úteis só se baseiam no horário de trabalho, ou seja, se for necessário, o prazo 
deve ir para o dia, semana ou mês seguinte.
- Não altere a declaração da função, apenas implemente seu código.

#### Testes de Mesa

A tabela abaixo representa uma chamado aberto na mesma data/hora
com SLAs diferentes para o seu entendimento sobre o comportamento
já mencionado anteriormente.

| Data de Abertura | SLA em horas | Data Prazo |
|------------------|--------------|------------|
2020-05-11 13:30:00 (seg) |  2 | 2020-05-11 15:30:00
2020-05-11 13:30:00 (seg) |  8 | 2020-05-12 11:30:00
2020-05-11 13:30:00 (seg) | 10 | 2020-05-12 14:45:00

---
Desenvolvido por:

![Vivaweb](https://avatars2.githubusercontent.com/u/6058802?s=200&v=4)
