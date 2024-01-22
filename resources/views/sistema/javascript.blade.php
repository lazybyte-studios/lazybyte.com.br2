O que é JavaScript?

JavaScript foi criado por Brendan Eich. É uma poderosa linguagem de programação que pode adicionar interatividade a um site. 

É versátil e amigável para iniciantes. Com mais experiência, é possível criar jogos, gráficos 2D e 3D animados, aplicativos abrangentes baseados em banco de dados e muito mais!

É uma das tecnologias da web modernas mais populares.

No entanto, familiarizar-se com JavaScript é mais desafiador do que familiarizar-se com HTML e CSS. 

Comentários

Comentários são trechos de texto que podem ser adicionados junto com o código. 
/*
    Tudo no meio é um comentário.
*/

// linha de comentário

Variáveis

Variáveis são contêineres ou espaços na memória para armazenar valores. 

Você começa declarando uma variável com a palavra-chave let ou var, seguida do nome que você dá à variável.

    let minhaVariavel = "Bob";
    minhaVariavel = "Steve";

As variáveis no Javascript são dinâmicas aceitando diversos tipos:


String      sequência de texto                      let texto = "texto";

Number      números inteiros                        let numero = 12;

Boolean     verdadeiro ou falso                     let comparacao = true;

Array       permite armazenar vários valores        let valores = [ 1, 'texto', true ];

Object      permite armazenar objetos (tags)        let objeto = document.querySelector('h1');

Operadores Aritméticos

Adição              +

Subtração           -

Multiplicação       *

Divisão             /

Módulo              %

Operadores Condicionais

Maior               >

Menor               <

Menor ou igual      <=

Maior ou igual      >=

Atribuição          =

Igualdade           ==

Igualdade estrita   ===

Negação             !

Diferente           !=

Funções

É uma forma de empacotar a funcionalidade que você deseja reutilizar.

function nomeDaFuncao ( param1, param2 )
{
    let calculo = param1 * param2;

    return calculo;
}

Eventos

A interatividade real em um site requer manipuladores de eventos eles detectam atividades no navegador e executam o código em resposta. 

document.querySelector("html").addEventListener("click", function () {
  alert("Texto");
});

Principais funções da linguagem

let / const / var: Declaração de variáveis. let e const são preferíveis para escopo local, enquanto var tem escopo global ou de função.

if / else: Estrutura condicional que executa blocos de código com base em uma condição verdadeira ou falsa.

for / while: Loops que executam um bloco de código repetidamente. for é usado para um número conhecido de iterações, while para condições indefinidas.

function: Declaração de função que define um bloco de código reutilizável.

return: Dentro de uma função, retorna um valor e encerra a execução da função.

console.log(): Exibe mensagens ou valores no console do navegador para fins de depuração.

Array: Estrutura de dados para armazenar uma lista de valores. Pode ser percorrido usando loops.

Object: Estrutura de dados que armazena pares chave-valor, organizando informações de forma mais complexa.

document.querySelector(): Seleciona o primeiro elemento no documento HTML que corresponde a um seletor CSS especificado.

addEventListener(): Adiciona um ouvinte de eventos a um elemento HTML para responder a interações do usuário.

alert(): Exibe uma caixa de diálogo com uma mensagem para o usuário.

prompt(): Exibe uma caixa de diálogo que solicita entrada do usuário.

confirm(): Exibe uma caixa de diálogo com um botão de confirmação e de cancelamento.

parseInt() / parseFloat(): Converte uma string em um número inteiro ou de ponto flutuante.

String.length: Propriedade que retorna o número de caracteres em uma string.

String.indexOf(): Retorna a posição da primeira ocorrência de um valor especificado em uma string.

String.slice(): Extrai uma parte de uma string e a retorna como uma nova string.

Array.push(): Adiciona um ou mais elementos ao final de um array e retorna o novo comprimento do array.

Array.pop(): Remove o último elemento de um array e o retorna.

Array.forEach(): Executa uma função para cada elemento em um array.

Math.random(): Gera um número pseudoaleatório entre 0 (inclusive) e 1 (exclusive).

Math.floor() / Math.ceil() / Math.round(): Arredonda um número para baixo, para cima ou para o inteiro mais próximo, respectivamente.
