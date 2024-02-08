<!DOCTYPE html >
<html lang="{{ $idioma }}" class="claro" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $titulo }}</title>

        <link rel="stylesheet" href="{{ asset('css/sistema/site_game.css' ) }}">



    </head>
    <body >
        <header id="topo" >

            <div class="topo" >
                <!-- Logo do site -->
                <figure class=" aparencia02 " >
                    <a href="#topo">
                        <img src="imagens/dev.png" alt="Logotipo MyDev" >
                    </a>
                    <figcaption>
                        <h1> My Dev </h1>
                    </figcaption>
                </figure>

                <!-- Menu Principal -->
                <nav>
                    <a href="#sobre_mim"> Sobre Mim </a>
                    <a href="#servicos"> Meus Serviços </a>
                    <a href="#portfolio"> Meus Projetos </a>
                    <a href="#loja"> Minha Loja </a>
                    <a href="#blog"> Meu Blog </a>
                    <a href="#contato"> Fale Conosco </a>
                </nav>
            </div>

            <div id="destaque" >

                    <h2>
                        Olá <br>
                        Eu sou o <strong>Seu Nome</strong>
                    </h2>

                    <p>
                        Freelancer | FullStack Developer | Game Developer
                    </p>

                <figure>
                    <img src="https://placehold.co/520x520" alt="Imagem em destaque" >
                </figure>

            </div>

        </header>


            <section id="sobre_mim" style="background: #bbb; height: 100vh;">
                Sobre
            </section>


    </body>
</html>
