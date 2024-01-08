O que é HTML e suas tags?

O HTML existe desde 1991 e atualmente está na versão 5, a função principal é demarcar a estrutura de uma página da web. 

Essa estrutura do HTML é formada por um conjunto de elementos, ou seja, os hipertextos, que se conectam entre si formando a página. 

Os elementos HTML ou também chamados de tags HTML, são utilizados para informar ao navegador que tipo de estrutura é essa que está sendo construída, podendo ser títulos, parágrafos, imagens, links, etc.

Para que um documento seja interpretado pelo navegador, é necessário que o arquivo tenha a extensão .html.

As tags são formadas por uma estrutura própria, iniciam com o sinal “menor que", em seguida vem o nome daquele elemento e por fim, o sinal “maior que". 

Existem tags que precisam de fechamento e tags que fecham sozinhas (self-closing). O fechamento de uma tag será definido com uma barra (/).

Tipos de tag

As tags podem ser categorizadas inicialmente em dois tipos, em “nível de bloco" (block-level) e “em linha" (inline). 

Um elemento em nível de bloco ocupa toda a largura de seu elemento pai, que também chamamos de elemento container, criando assim um “bloco". Já os elementos inline, geralmente usamos para demarcação de conteúdos de texto.

Estrutura básica

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Document&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;/body&gt;
&lt;/html&gt;

&lt;!DOCTYPE html&gt;
Informa ao navegador que esse documento é do tipo HTML e sua versão. Quando está escrito apenas html, indica que é a mais recente...

&lt;html&gt;
Representa a raiz do documento, serve com um container que engloba todos os outros elementos HTML.

&lt;body&gt;
É onde fica todo o conteúdo de texto, imagem e vídeos, em que o usuário vê e interage, nele os conteúdos são estruturados pelas demais tags do HTML.

&lt;script&gt;
Esse elemento contém instruções de script ou aponta para um arquivo de script externo por meio do atributo src.

&lt;head&gt;
Compreende as informações do documento que serão interpretadas pelo navegador (metadados). Como por exemplo, título do documento, links para folhas de estilo etc.

&lt;meta&gt;
Define metadados, ou seja, informações sobre dados de um documento HTML. As &lt;meta&gt; tags vão dentro do elemento &lt;head&gt; e são usadas para especificar o conjunto de caracteres, o autor do documento, as configurações da janela de visualização etc.

&lt;link&gt;
É uma tag vazia, que contém apenas atributos e faz a relação do documento HTML com recursos externos, é comumente usado para vincular uma folha de estilo externa, também é usada para definir o favicon da página (ícone da aba do navegador), como outros recursos.

&lt;style&gt;
Essa tag é usada para declarar estilos (CSS) para um documento.

Tags semânticas

Tags semânticas são tags que possuem um significado, que dão sentido a informação de texto ao navegador e buscadores, como por exemplo, utilizar a tag &lt;header&gt; para cabeçalhos ou &lt;article&gt; para dar um significado de artigo para aquele bloco de texto, até mesmo &lt;p&gt; para indicar que aquele texto é um parágrafo, é uma boa prática tentar sempre utilizar essas tags semânticas para ajudar no entendimento do código, além de ajudar muito no SEO do site (Otimização para motores de busca, é o que ajuda o seu site a se rankear melhor nos motores de buscas como o Google). Segue abaixo a lista de tags semânticas citadas durante o artigo:

&lt;header&gt;
&lt;main&gt;
&lt;footer&gt;
&lt;section&gt;
&lt;article&gt;
&lt;aside&gt;
&lt;nav&gt;
&lt;ol&gt;
&lt;ul&gt;
&lt;li&gt;

Tags sem semântica

As tags que não possuem semântica não definem um significado para aquele texto, normalmente são utilizadas apenas para fins de separação e estilização. Veja logo abaixo a lista de algumas tags sem semântica:

&lt;div&gt;
&lt;span&gt;
&lt;b&gt;
&lt;i&gt;

Comentários

Comentários no HTML ou em qualquer outra linguagem são notas que podem ser incluídas no código fonte para descrever o que se quiser. Assim, não modificam o programa executado e servem somente para ajudar a pessoa que está desenvolvendo a melhor organizar os seus códigos. Para comentar algum código no HTML você deve envolvê-lo entre &lt;!-- Seu código aqui --&gt;. Por exemplo:

&lt;!-- 

&lt;div&gt;
    &lt;p&gt;Esse código será ignorado pelo navegador&lt;/p&gt;
&lt;/div&gt;

–-&gt;

Formulário

&lt;form&gt;

    Essa tag indica que estamos iniciando um formulário, recebe como principais atributos method que recebe como valor o método http que esse formulário irá executar (get, post) e action que especifica para onde enviar os dados do formulário quando um formulário é enviado.

&lt;form&gt;&lt;/form&gt;

&lt;input&gt;

    Um campo para que o usuário possa inserir algum texto, data, número, cor, etc… possui como principais atributos type, que recebe como valor o tipo do input.

&lt;textarea&gt;&lt;/textarea&gt;

&lt;textarea&gt;

    Representa uma caixa de texto, útil quando você quer permitir ao usuário informar um texto extenso em formato livre, como um comentário ou formulário de retorno.    

    &lt;button&gt;

    Um botão clicável, possui como principais atributos type, que caso receba submit como valor e esteja dentro de um formulário, irá submeter o formulário.

 &lt;button type="submit"&gt;Enviar&lt;/button&gt;

 &lt;label&gt;
    
    A tag label é importante para os campos de formulários. Ela especifica qual o "rótulo" do input (a que se refere o input, como por exemplo envolvê-la em um texto “Nome completo"), e ajuda na experiência do usuário durante a utilização e preenchimento do formulário.

&lt;label&gt;Nome completo&lt;/label&gt;

Atributos

Atributos HTML são palavras especiais usadas dentro da tag de abertura para controlar o comportamento do elemento. Os atributos HTML são um modificador de um tipo de elemento HTML. Com eles podemos identificar melhor um elemento, informar qual arquivo aquela tag deve utilizar, indicar o tipo de um campo de texto, etc…

Há dois tipos de atributos no HTML, os globais que são aceitos por todas as tags, como por exemplo: class, id, lang, style e algumas outras que você pode conferir na documentação também existem os específicos que somente algumas tags possuem, como src, disabled, href, label, etc…

A estrutura de um atributo é:

nome="valor"

class="NomeDaClasse"

Classes são como classificações de uma tag/elemento, para que no CSS estilizar uma tag específica, ou um conjunto de tags. Também é possível usar no JavaScript para selecionar uma tag específica.

HTML:

&lt;h1 class="titulo"&gt;Mergulhe em Tecnologia!&lt;/p&gt;

id="NomeDoId"

Identificar de forma única um elemento naquela página HTML... É utilizado para identificar destino de âncoras, labels e outras funcionalidades neste sentido.

src="Link ou diretório da mídia"

Comumente utilizado para indicar para a tag qual arquivo ou mídia utilizar. Recebe valores como links (https://google.com/minhaimagem.jpeg) ou o nome de um arquivo já presente no projeto (/minhaimagem.jpeg).

&lt;img loading="lazy" src="https://www.alura.com.br/assets/img/alura-share.1636535197.png" &gt;

alt="Texto alternativo"

O atributo alt fornece informações alternativas para uma imagem se um usuário por algum motivo não puder visualizá-la (devido à conexão lenta, um erro no atributo src ou se o usuário usar um leitor de tela).

href="Url"

Para a tag &lt;a&gt;, o atributo href especifica a URL da página para a qual o link vai.

&lt;p&gt;Clique &lt;a href="https://www.alura.com.br/"&gt;aqui&lt;/a&gt; para ir para o site da alu