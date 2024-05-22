# Exercícios de PHP

## 25/05/2024

### Exercício 4

#### Etapa 01

Abra o arquivo **exercicio04-formulario.php** e analise sua estrutura.

Veja que existe um formulário com campos para para **simulação de cadastro** de produtos:

- Nome do produto - `input text`
- Fabricante - `select/option`
- Preço - `input number`
- Descrição - `textarea`
- Botão de enviar - `input submit`

##### DESAFIO FABRICANTE

- Crie um array contendo uma lista com os nomes de 4 fabricantes.
- Usando o loop `foreach`, faça os `options` do `select` serem carregados a partir dos dados do array que você criou.

#### Etapa 02

Abra o arquivo **exercicio04-processamento.php** e faça a programação de processamento do formulário considerando o envio/recebimento via POST.

Mostre os dados recebidos usando tags HTML.

##### DESAFIO PREÇO

Faça o preço aparecer formatado em Reais.

Exemplo: se o preço digitado no formulário for **4500.75**, deverá aparecer no HTML como **R$ 4.500,75**.

---

## 16/05/2024

### Exercício 3

- Crie um array contendo o nome dos **12 meses** do ano.

- Monte uma **lista ordenada** exibindo o nome de cada mês em um item.

**DESAFIO**: formate a lista de uma forma que os meses apareçam com cores alternadas. Exemplo: janeiro/março em azul, fevereiro/abril em vermelho etc.

---

## 15/05/2024

### Exercício 2

Crie um novo arquivo chamado **exercicio02.php** e nele faça um array (numérico OU associativo) chamado `dados` contendo as seguintes informações:

- Nome de usuário *(exemplo: chapolin.colorado)*
- Senha *(exemplo: 123teste)*
- Idade *(exemplo: 30)*
- Cidade *(exemplo: São Paulo)*
- Telefones *(exemplo: 11-2135-0300 e 11-91234-5678)*

Em seguida, mostre somente os valores de **nome de usuário**, **idade**, **cidade** e um dos **telefones** em uma lista ordenada HTML.

---

### Exercício 1

Crie um novo arquivo chamado **exercicio01.php** e nele crie variáveis e/ou constantes para:

- Nome de uma pessoa *(exemplo: Chapolin)*
- Idade que esta pessoa tem *(exemplo: 25)*

Mostre no HTML uma mensagem qualquer apresentando o nome da pessoa e a idade dela. Exemplo: "*Chapolin* possui **25 anos**."

Faça algum tipo de destaque visual no nome e outro na idade.