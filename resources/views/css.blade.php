O que é o CSS?

Criada por Hakon Wium Lie e Bert Boss, o CSS Cascading Style Sheet ou Folha de Estilos em Cascata é uma linguagem de estilos.

Enquanto o HTML é usado para estruturar e organizar elementos e informações na página, o CSS é responsável pela parte estética. 

CSS: para que serve?

O CSS serve, principalmente, para transformar páginas html simples em conteúdos atraentes, ou seja, trabalha diretamente com a estética do site.

Quais as vantagens de usar CSS?

A primeira vantagem de usar CSS é, obviamente, construir páginas mais bonitas e sofisticadas.

Possuir um site que explora bem as possibilidades estéticas é um grande diferencial, inclusive, para a experiência do usuário.

Algumas de suas principais vantagens são:

1 - Mudanças visuais e de estilo fáceis e rápidas

Além do grande leque de oportunidades que o CSS nos dá, ele também possui uma sintaxe extremamente simples e de fácil compreensão.

Isso torna sua manutenção muito mais amigável: desenvolver um arquivo .css, consertar um código já existente ou fazer quaisquer mudanças em uma página é, de modo geral, um processo muito simples.

2 - Responsividade 

O css, além de ser uma linguagem de estilo, também é uma linguagem utilizada para trabalhar com o responsivo do seu site. Deixando mais flexível e adaptável para diferentes dispositivos.

Com esse recurso, você consegue definir ou editar determinado estilo de um elemento a cada breakpoint definido pelo usuário ou dispositivo.

Essa técnica para definir os Breakpoint é conhecida como media query, nela podemos aplicar uma  propriedades de css para um determinado bloco caso uma determinada condição for verdadeira. Veja!


3 - Folhas de estilo

As chamadas folhas de estilo são as folhas de código que declaram o estilo de um arquivo HTML. Em outras palavras, uma folha de estilo é um arquivo.css.

Uma das principais formas de aplicá-la a um HTML pré-existente é através da vinculação de um arquivo externo, o que facilita muito a manutenção destes códigos.

Na necessidade de mexer em algo dentro do CSS, é só ir diretamente em seu arquivo.css, sem precisar abrir o HTML, por exemplo, impedindo que uma linguagem interfira na outra.

O que posso fazer com CSS?

Com a sua última atualização, o CSS 3, as possibilidades de estilização de layout desta linguagem aumentaram consideravelmente.

Animações

Com o CSS3, criar animações tornou-se muito simples. A propriedade animation é a grande responsável por esses efeitos, com conjunto com outras propriedades menores de qualificação.

Efeitos visuais

Efeitos visuais como gradientes, sombreamento, 3D, fade in, mudança de cor (hover), rotação, crescer e encolher, inserção de bordas, entre outros são possíveis com o CSS.

Sites visualmente dinâmicos

Em se tratando de estilização, um site dinâmico é aquele que conta com efeitos visuais que possibilitam uma interação um pouco maior do usuário com a página.  

Com à criação do CSS, construir um site visualmente mais elaborado  com grandes possibilidades de interação entre usuário e website se tornou muito mais simples do que era antes.

Como funciona o CSS?

Assim como o HTML, o CSS pode funcionar em blocos ou para toda a página.

Com uma sintaxe bastante acessível, esta linguagem de marcação funciona selecionando os blocos que serão modificados visualmente.

Como são as regras?

As regras no CSS são bastante simples.

A própria sintaxe desta linguagem segue este modelo: para estilizar um bloco HTML, basta selecioná-la através do elemento seletor e, entre { } (chaves), declarar uma propriedade.

Veja abaixo um exemplo de uma linha de código CSS. Nele, o tipo de seletor é pela tag HTML h1:

seletor
{
    atributo: valor;
}

Quais os  seletores básicos?

Os seletores no CSS são padrões que ajudam a direcionar quais elementos HTML serão estilizados. Aqui estão alguns dos principais:

Seletor de Elemento(tag): Estiliza um tipo específico de elemento HTML, como p para parágrafos.

Exemplo: p { /* estilos */ }

Seletor de Classe: Estiliza elementos com uma classe específica.

Exemplo: .minha-classe { /* estilos */ }

Seletor de ID: Estiliza um elemento com um ID específico.

Exemplo: #meu-id { /* estilos */ }

Seletor Universal: Estiliza todos os elementos na página.

Exemplo: * { /* estilos */ }

Seletor de Descendente: Estiliza um elemento que é descendente de outro.

Exemplo: pai filho { /* estilos */ }

Seletor de Filho Direto: Estiliza um elemento que é um filho direto de outro.

Exemplo: pai > filho { /* estilos */ }

Seletor de Atributo: Estiliza elementos com um atributo específico.

Exemplo: [atributo="valor"] { /* estilos */ }


Propriedades do CSS

Através delas conseguimos passar valores que irão estilizar os nossos elementos. Basta escrevermos o nome da propriedade e depois o valor que ela irá receber.

background

border

position

transition

color 

display

box-shadow

margin

padding

Integrando CSS ao HTML

Existem três maneiras de vincular arquivos de CSS a uma página HTML: 

    interno: ou incorporado, é aquele que é inserido dentro do código HTML, mais especificamente dentro da tag <head>, através de uma tag style. É uma boa opção de conexão com HTML quando todo o estilo será aplicado a apenas uma página.

    externo: é o mais utilizado por desenvolvedores front-end que manuseiam CSS e é a melhor opção em termos de performance e agilidade. Nesta modalidade de vinculação, o arquivo .css é totalmente separado do arquivo .html. 
    
    inline: O CSS inline também é acrescido diretamente no HTML, mas dentro de cada tag que deve ser estilizada.Também através do atributo style, esta declaração CSS se insere dentro de uma tag. É a opção menos prática de inserção de CSS porque não facilita a manutenção do documento. Para linkar uma folha de estilo à um arquivo HTML, basta inserir o elemento link na tag <head> do documento.

Solução de conflitos

Quando há conflitos entre regras CSS, ou seja, duas regras passando valores diferentes ao mesmo atributo, a resolução segue um conjunto de prioridades e hierarquia. 

Assim as regras mais específicas (seletores maiores) têm maior peso, e em caso de empate, a regra que aparece por último no código prevalece.

#id         

.classe [atributo = valor ] :hover 

tag

*universal


css inline

css externo

css externo