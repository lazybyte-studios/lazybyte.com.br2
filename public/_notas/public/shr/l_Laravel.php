<?php require_once "_topo.php"; ?>

    <header class="caption">
        <h1>Laravel</h1>
        <p>Maycon Guerra</p>
    </header>

    <section class="slide" id="cover" >
        <figure>
            <img class="cover" src="https://lh3.google.com/u/0/d/1YHmbz0v9F4u_YCP5DA_6ik7FrgkL2w_q" >
        </figure>
    </section>

    <section class="slide">
        <h2>O que é?</h2>
        <div class="columns two">
            <ul style="font-size: 1.05rem;">
                <li>
                    <b>Laravel</b> é um framework de desenvolvimento web em PHP é uma abstração (reutilização) de códigos que facilita a criação de aplicativos web robustos e escaláveis.
                </li>
                <li>
                    Segue o padrão arquitetural MVC (Model-View-Controller), fornece muitas ferramentas e recursos prontos para uso.
                </li>
                <li>
                    O projeto pode ser colocado em qualquer local do computador (não precisando estar na pasta www ), pois o Laravel tem um servidor de teste embutido se estiver configurado corretamente.
                </li>
            </ul>
            <figure >
                <img src="https://lh3.google.com/u/0/d/1YHmbz0v9F4u_YCP5DA_6ik7FrgkL2w_q" style="width: 100%;" >
            </figure>
        </div>
    </section>

    <section class="slide">
        <h2>Requisitos Laravel</h2>
        <div class="columns two">
            <ul style="font-size: 1.1rem;">
                <li>
                    Certifique-se de ter o <a href="https://www.wampserver.com/en/">PHP</a> instalado em sua máquina. O Laravel requer PHP 7.3.0 ou superior.
                </li>
                <li>
                    Abra o <span title=" mkdir dir | touch arquivo.ext para criar arquivo | ls listar | clear limpar | nano arquivo.ext para editar">terminal</span> e digite: php -v
                </li>
                <br>
                <li>
                    Instale o <a href="https://getcomposer.org/">Composer</a>, uma ferramenta de gerenciamento de dependências ( bibliotecas de terceiros ).
                </li>
                <li>
                    Abra o terminal e digite: composer --versions
                </li>
                <br>
                <li>
                    Instale o <a href="https://git-scm.com/">Git</a>, uma ferramenta de versionamento e deploy (github.com).
                </li>
                <li>
                    Abra o terminal e digite: git -v
                </li>
            </ul>
            <figure >
                <img src="https://kinsta.com/pt/wp-content/uploads/sites/3/2023/02/laravel-10-1.png" style="width: 120%;" >
            </figure>
        </div>
    </section>

    <section class="slide" style="background: url(https://lh3.google.com/u/0/d/1aAlkW4YVajrWf_ABC9gmG9uinlBrg5lF) no-repeat; background-size: cover;" >
    </section>

    <section class="slide">
        <h2>Criando o projeto Laravel</h2>
        <div class="columns two">
            <ul style="font-size: 0.8rem; width: 300%!important;">
                <li>
                    Navegue até o local onde seu projeto será salvo.
                </li>
                <li>
                    Abra um terminal e use o comando abaixo para criar a pasta do projeto já com a instalação do Laravel.
                </li>
                <li style="background: #555; padding: 10px 20px; list-style-type: none; color: #fff; font-size: 0.65rem; border-radius: 5px;">
                    composer create-project laravel/laravel nome-do-projeto <br>
                    composer create-project --prefer-dist laravel/laravel:^7.0 nome-do-projeto
                </li><br>
                <li class="next">
                    O Laravel cria um servidor virtual (virtual host) para o seu projeto. O artisan permite usar vários comandos via linha de comando. Ele pode ser chamado com o comando abaixo:
                </li>
                <li class="next" style="background: #555; padding: 10px 20px; list-style-type: none; color: #fff; font-size: 0.65rem; border-radius: 5px;">
                    php touch teste.php <br>
                    php artisan --versions <br>
                    php artisan list <br>
                    php artisan help comando <br>
                    php artisan serve # executa o projeto <br>
                </li>
            </ul>
            <figure >
                <img src="https://lh3.google.com/u/0/d/1KXuBGPYXxQ0_skoy3DaLzsiJJmFSeGa7" style="height: 37%; width: auto; margin-left: 200px;" >
            </figure>
        </div>
    </section>

    <section class="slide" id="cover" >
        <p style="color: #333; margin-top: -50px; font-size: 0.9rem;" >
            É um padrão de arquitetura de desenvolvimento para organização dos códigos <br> de forma a facilitar a manutenção/atualização dos códigos.
        </p>
        <figure>
            <img class="cover" src="https://lh3.google.com/u/0/d/1LQaMTq5QP-bUPlYJnrMdm-v0z_OcOHaV" >
        </figure>
    </section>

    <section class="slide" style="background: url(https://lh3.google.com/u/0/d/1_vFF1hgm62UABHJC9ECmFGMD2gWoq9M1) no-repeat; background-size: cover;" >
        <h2 style="color: #fff;">Sistema de Usuários</h2>
    </section>

    <section class="slide">
        <h2> Casos de Uso | Mapa do site </h2>

        <style>
            .uml img
            {
                width: auto!important;
                height: 100%;
            }
        </style>

        <div class="columns two uml">
            <uml>
                left to right direction
                actor Usuario as usu

                package Web {
                    usecase "Cadastrar-se" as UC1
                    usecase "Realizar Login" as UC2
                    usecase "Manter Cadastro" as UC3
                }

                usecase "Login Social \n Github \n Google" as UC4

                usu --> UC1
                usu --> UC2
                usu --> UC3

                UC2 .> UC4 : extends
            </uml>
            <uml>
                top to bottom direction

                package Navega&ccedil;&atilde;o {
                    usecase "Dashboard" as UC1
                    usecase "Usuarios" as UC2
                    usecase "Cadastrar \n Editar|Excluir" as UC3
                }

                UC1 --> UC2 : Listar todos
                UC1 --> UC3

            </uml>
        </div>
    </section>

    <section class="slide">
        <h2> Navegação </h2>

        <style>
            .uml img
            {
                width: auto!important;
                height: 100%;
            }
        </style>

        <div class="columns two uml">

        </div>
    </section>

    <section class="slide" style="background: url(https://lh3.google.com/u/0/d/1_vFF1hgm62UABHJC9ECmFGMD2gWoq9M1) no-repeat; background-size: cover;" >
        <h2 style="color: #fff;"> Wireframe Layout </h2>
    </section>

    <section class="slide">
        <h2> Requisitos Funcionais </h2>
        <div class="columns two">
            <ul>
                <li>Uso do bootstrap</li>
                <li>FlexBox responsivo</li>
            </ul>
        </div>
    </section>

    <section class="slide" style="background: url(https://www.cloudways.com/blog/wp-content/uploads/Main.jpg) no-repeat; background-size: cover;" >
        <h2 style="color: #fff;"> Laravel Routes </h2>
    </section>

    <section class="slide">
        <h2> Rotas <a href="https://laravel.com/docs/10.x/routing"><i class="bi bi-file-earmark-richtext" style="font-size: 1.5rem; color: #333; text-decoration: none; "></i></a> </h2>
        <div class="columns two">
            <ul style="font-size: 0.9rem; width: 120%;">
                <li>
                    Montam a estrutura de navegação no sistema/site.
                </li>
                <br>
                <li>
                    Rotas são utilizadas para direcionar requisições HTTP para ações específicas em seu aplicativo.
                </li>
                <br>
                <li>
                    Ajudam a definir quais controladores e métodos devem ser chamados quando uma determinada URL é acessada.
                </li>
            </ul>
            <pre style="margin-top: -150px; font-size:0.6rem; " class="hljs mb-0 block min-h-full overflow-auto">
            <code class="language-php ">
                    Route::verboHttp("rota", "callback");
                    Route::any("/", "callback"); // put, get, post, delete menos seguro
                    Route::match(['get','post'], "/", "callback"); // apenas os acessos definidos

                    # Rota Básica
                    Route::get('/exemplo', function () {
                        return 'Esta é uma rota de exemplo!'; // retorna um echo com o texto
                        return view("welcome"); // retorna uma view da pasta resources/views
                        return view("pasta/welcome"); // retorna uma view da pasta resources/views/pasta
                    });

                    # Parâmetros de Rota
                    Route::get('/usuario/{id}', function ($id) {
                        return 'Detalhes do usuário com ID ' . $id;
                    });

                    # Rota para Controlador ( chamando método )
                    Route::get('/perfil', 'PerfilController@index');

                    # Rotas nomeadas
                    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

                    # Rotas Agrupadas
                    Route::group([ 'prefix' => 'notas', 'as' => 'notas.'], function(){
                        Route::get('/', [NotaController::class, 'index'])->name('index');
                    });
            </code>
            </pre>
        </div>
    </section>

    <section class="slide">
        <h2> Rotas </h2>
        <div class="columns two">
            <ul style="font-size: 0.9rem; width: 120%;">
                <li>
                    Podemos enviar parâmetros através das rotas.
                </li>
                <br>
                <li>
                    Podemos criar redirecionamentos através de rotas.
                </li>
                <br>
                <li>
                    Podemos criar rotas nomeadas para que possamos referenciá-las pelo nome e não pela sua url.
                </li>
            </ul>
            <pre style="margin-top: -120px; font-size:0.6rem;  " class="hljs mb-0 block min-h-full overflow-auto">
            <code class="language-php ">

                    # Envia um parâmetros pela url, um sendo opcional
                    Route::get('/produto/{categoria?}/{id}', function ( $categoria = null, $id )
                    {
                        return "O id do produto é {{ $id }} e a categoria é " . $categoria ;
                    });

                    # Redirecionando uma rota para uma outra
                    Route::redirect( '/sobre', '/empresa' );

                    # Retornando diretamente uma view (sem precisar criar a função callback )
                    Route::view("/empresa", "site/empresa");

                    # Rota nomeada
                    Route::get('/news', function( )
                    {
                        return view("news");
                    })->name("noticias");

                    Route::get('/novidades', function ( $categoria = null, $id )
                    {
                        #chama a rota pelo nome
                        return redirect()->route("noticias") ;
                    });
            </code>
            </pre>
        </div>
    </section>

    <section class="slide">
        <h2> Rotas </h2>
        <div class="columns two">
            <ul style="font-size: 0.9rem; width: 120%;">
                <li>
                    As rotas definem o que deve ser entregue ou disparado aquando um determinado endereço e verbo for chamado.
                </li>
                <br>
                <li>
                    Existem diversos de tipos de rotas que podem ser definidas.
                </li>
                <br>
                <li>
                    As rotas são definidas na pasta "routes" no arquivo web.php <br> (para as rotas do site)
                </li>
                <br>
                <li>
                    As rotas podem entregar arquivos (views, etc), executar códigos diretamente ou ainda chamar funções das controllers.
                </li>
            </ul>
            <pre style="margin-top: -90px; font-size:0.6rem;  " class="hljs mb-0 block min-h-full overflow-auto">
            <code class="language-php ">
                    &lt;?php

                        # importação das classes de dependências
                        use Illuminate\Support\Facades\Route;

                        # rota retornando o arquivo views\home.blade.php
                        Route::get("/", function(){
                            return view("home");
                        });
            </code>
            <code class="language-bash">
                    # no terminal
                    php artisan serve

                    # Criando as chaves criptográficas
                    php artisan key:generate
            </code>
            </pre>
        </div>
    </section>

    <section class="slide">
        <h2> Bootstrap </h2>
        <div class="columns two">
            <ul style="font-size: 0.9rem; width: 120%;">
                <li>
                    O composer permite instalar pacotes de dependência de plugins e frameworks que serão utilizados.
                </li>
            </ul>
            <pre style="margin-top: -90px; " class="hljs mb-0 block  overflow-hidden">
            <code class="language-bash">
                # checar a instalação do Laravel
                composer install

                # Instalando o bootstrap
                composer require twbs/bootstrap

                # atualizando a estrutura do projeto depois de alterações
                composer dump-autoload

                # copie os arquivos do bootstrap para a pasta public

            </code>
            <code class="language-html" style="padding-top: 0;" >
               &lt;link href="{{ asset('css/bs/bootstrap.min.css') }}" rel="stylesheet"&gt;

               &lt;script src="{{ asset('/js/bs/bootstrap.bundle.min.js') }}"&gt;&lt;/script&gt;
            </code>
        </pre>
        </div>
    </section>

    <section class="slide" style="background: #dedede url(https://repository-images.githubusercontent.com/193065581/e468c180-78ac-11ea-9510-97b5d2177788) no-repeat; background-size: cover;" >
        <h2 style="color: #fff;">Blade</h2>
    </section>

    <section class="slide">
        <h2> Blade <a href="https://laravel.com/docs/10.x/blade"><i class="bi bi-file-earmark-richtext" style="font-size: 1.5rem; color: #333; text-decoration: none; "></i></a></h2>
        <div class="columns two">
            <ul style="font-size: 0.9rem; width: 120%;">
                <li>
                    O Laravel possui um framework que facilita muito o desenvolvimento front end chamado Blade.
                </li>
                <br>
                <li>visões (views) de maneira mais limpa e expressiva, separando o código PHP do HTML.
                    <ol>
                        <li>
                            <b>Simplicidade e Clareza</b>:
                            projetado para ser simples e fácil de usar.
                        </li>
                        <li>
                            <b>Estruturas de Controle Simplificadas</b>:
                            loops e condicionais de maneira mais fácil com as diretivas do Blade.
                        </li>
                        <li>
                            <b>Herança de Layout</b>:
                            permitindo definrir um layout principal e estender ou substituir seções específicas em páginas filhas.
                        </li>
                        <li>
                            <b>Escape Automático de Saída</b>:
                            para ajudar a prevenir ataques de injeção de código (cross-site scripting), tornando suas aplicações mais seguras.
                        </li>
                    </ol>
                </li>

            </ul>
            <pre style="margin-top: -180px; font-size: 0.68rem; " class="hljs mb-0 block min-h-full overflow-auto">
            <code class="language-php ">
                    &lt;!-- blade de template --&gt;
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="{{$idioma}}" &gt;
                    &lt;head&gt;
                        &lt;title&gt; {{$titulo}} &lt;/title&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        @yield("conteudos")
                    &lt;/body&gt;
                    &lt;/html&gt;

                    &lt;!-- blade de conteúdo --&gt;
                    &lt;?php
                        $idioma = "pt-br";
                        $titulo = "Wireframe Home";
                    ?&gt;
                    @extends('temas.wireframe')
                    @section('conteudos')
                        &lt;h1&gt;{{ $titulo }}&lt;/h1&gt;
                        &lt;ul&gt;
                            @foreach($itens as $item)
                                &lt;li&gt;{{ $item }}&lt;/li&gt;
                            @endforeach
                        &lt;/ul&gt;
                    @endsection
            </code>
            </pre>
        </div>
    </section>

    <section class="slide">
        <h2> Controller </h2>
    </section>

    <section class="slide">
        <h2> Listando Usuários <br> (Read) </h2>
        <div class="columns two">
            <ul style="font-size: 0.9rem; width: 120%;">
                <li>
                    Vamos criar as rotas necessárias para a autenticação de usuários do nosso sistema.
                </li>
                <br>

            </ul>
            <pre style="font-size: 0.58rem; border: solid 2px #000; border-radius: 8px; margin-top: -200px; " class="hljs mb-0 block min-h-full overflow-auto">
            <code class="language-php ">

                    # Crie as rotas
                    # Cria a rota de usuários nomeada
                    Route::get('/users', [UserController::class, 'index'])->name ('users.index');

                    # Para importar o controller ctrl + espaço

                    # Criando o controller da rota
                    php artisan make::controller UserController

                    # Criando o método index
                    class UserController extends Controller
                    {
                        public function index()
                        {
                            dd('UserController@index');# dump and die - depuração do código
                            # retornando a view
                            return view('users.index');
                        }
                    }

                    # criar a view index.blade.php

                    # Executar a aplicação
                    php artisan serve

            </code>
            </pre>
        </div>
    </section>

<?php require_once "_rodape.php"; ?>










