<?php require_once "_topo.php"; ?>

    <header class="caption">
        <h1>Pré Produção</h1>
        <p>Maycon Guerra</p>
    </header>

    <section class="slide">
        <h2>Apresentação</h2>
        <div class="columns two">
            <ul style="font-size: 1.1rem;">
                <li> Maycon Guerra </li>
                <li> Graduação Design de Produto - Belas Artes de SP </li>
                <li> Pós Graduado Gestão de Projetos - UNIP </li>
                <li> Pós Graduado Programas e Jogos para Mobile - FIAP </li>
                <li> maycon.aguerra@sp.senac.br </li>
                <li class="next" > E você? quem é? E qual seu objetivo no curso? </li>
            </ul>
            <figure >
                <img src="https://docs.google.com/uc?id=1QnooFk9Q5H_5JvnHJBeSX01m5iuz-D6C" style="width: 100%;" >
            </figure>
        </div>
    </section>

    <section class="slide" id="cover">
        <h2>Planejamento Web</h2>
        <figure>
            <img class="cover" src="https://docs.google.com/uc?id=1_DsSwUvW5gZrnzATYIzZmHaKH9dFqzlT" style="height: auto!important; width: 100vw;" >
        </figure>
    </section>

    <section class="slide">
        <h2>Capturando com celular</h2>
        <div class="columns two">
            <ul style="font-size: 1.1rem;">
                <li> Capturar no maior tamanho possível. </li>
                <li> Evitar movimentos bruscos da câmera. </li>
                <li> Quanto melhor for o celular menos problemas.</li>
                <li> Deixar em modo avião para evitar interrupções.</li>
                <li> Segurar com firmeza.</li>
                <li> Zoom no máximo e afaste para melhorar qualidade em planos mais fechados.</li>
                <li> Zoom no baixo e afaste para melhorar qualidade em planos mais abertos.</li>
            </ul>
            <figure >
                <img src="https://docs.google.com/uc?id=1nETbKll1LkBKeMuA1TTWbh_Dd7Ye6btC" style="width: 130%;" >
            </figure>
        </div>
    </section>

    <section class="slide" style="background: url(https://docs.google.com/uc?id=1KNVNmbvdejiACfo5OSH5GQ3u7IbFM4AV) no-repeat; background-size: cover;" >
        <h2 style="color: #fff;">Tamanho 4K vs FullHD</h2>
    </section>

    <section class="slide" >
        <h2 style="color: #fff;">Distorções</h2>
        <video style="height: 75%;" controls muted>
            <source src="https://docs.google.com/uc?id=1My2GHUOcULDh3VokTviZsktfrkrAa2wi" type="video/mp4">
        </video>
    </section>

    <section class="slide">
        <h2> Rotas </h2>
        <div class="columns two">
            <ul style="font-size: 0.9rem; width: 120%;">
                <li>
                    Rotas são utilizadas para direcionar requisições HTTP para ações específicas em seu aplicativo.
                </li>
                <li>
                    Ajudam a definir quais controladores e métodos devem ser chamados quando uma determinada URL é acessada.
                </li>
            </ul>
            <pre style="font-size: 0.7rem; border: solid 2px #000; border-radius: 8px; " class="hljs mb-0 block min-h-full overflow-auto">
            <code class="language-php ">
                Route::get('/exemplo', function () {
                    return 'Esta é uma rota de exemplo!';
                });

            </code>
            </pre>
        </div>
    </section>

    <section class="slide">
        <h2> Rotas </h2>
        <div class="columns two">

            <uml>
                Alice -> Bob: Authentication Request
                Bob --> Alice: Authentication Response

                Alice -> Bob: Another authentication Request
                Alice &lt;-- Bob: another authentication Response
            </uml>

        </div>
    </section>

<?php require_once "rodape.php"; ?>











