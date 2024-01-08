<!DOCTYPE html >
<html lang="{{ $idioma }}" class="claro" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $titulo }}</title>

        <link rel="stylesheet" href="{{ asset('css/bs/bootstrap.min.css' ) }}">

        <link rel="stylesheet" href="{{ asset('css/bs_icons/font/bootstrap-icons.min.css' ) }}">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <script src="{{ asset('js/bs/bootstrap.bundle.min.js') }}" defer ></script>

        <script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer ></script>
        {{-- hsl(217, 28%, 15%); --}}
        <style>
            :root
            {
                --cor-fundo: #eee; 
                --hover: #333;
                
            }

            .escuro:root
            {
                --cor-fundo: #000;
            }

            html
            {
                scroll-behavior: smooth;
                scroll-snap-type: y;
                height: 100%;
                display: grid;
                grid-auto-rows: 100vh;
            }

            body
            {
                background: var( --cor-fundo );
            }

            #menu 
            {
                padding-top: 20px;
                position: absolute;
                top: 0;
                left: 0;
                width: calc( 100vw - 17px );
                transition: all 0.3s ease-in-out;
                z-index: 1000;
            }

            #menu.fixa
            {
                max-height: 80px;
                padding-top: 25px;
                position: fixed;
                background: var( --hover );
            }

            nav a
            {
                text-decoration: none;
                color: #fff;
                margin: 0 15px;
                font-size: 1.2rem;
                font-weight: 700;
                padding: 10px 20px;

            }

            .botao,
            .botao2
            {
                width: auto;
                height: 63px;
                border: 3px solid #f1d204;
                line-height: 63px;
                background: #f1d204;
                margin: 0 15px;
                padding: 0 70px;
                display: inline-block;
                border-radius: 3px;
                font-weight: 700;
                font-size: 16px;
                color: #fff;
                transition: all 0.3s;
                font-family: Lato;
                min-width: 242px;
            }

            .botao:hover
            {
                background: #9b51e0;
                border-color: #9b51e0;
            }

            .botao2
            {
                background: rgba(255, 255, 255, 0.3);
                border: 3px solid #fff;
            }

            .botao2:hover
            {
                background: rgba(255, 255, 255, 0.1);
            }

            section
            {
                width: 100%;
                min-height: 100vh;
                scroll-snap-align: start;
                scroll-snap-stop: always;
            }

            section > h2
            {
                margin: 0 0 55px 0;
                color: #545454;
                font-size: 35px;
                line-height: 38px;
                font-weight: 700;
                padding-top: 80px;
                text-align: center;
            }

            .progress-box
            {
                width: 503px;
                padding: 30px 40px;
                border-radius: 5px;
                margin: 0 auto;
                margin-top: -8rem;
            }

            .progress-box .progress
            {
                background: #d1e2fc;
                height: 5px;
                border-radius: 10px;
            }

            .progress-item
            {
                position: relative;
                margin-top: 1.5rem;
            }

            .progress-item h2,
            .progress-item span
            {
                font-size: 18px;
                color: #2e2d2d;
                font-weight: 700;
                margin: 20px 0;
            }

            .progress-bar
            {
                background: #6d18ef;
            }

            .progress span
            {
                content: "25%";
                width: 64px;
                height: 29px;
                line-height: 26px;
                background-color: #f1d204;
                position: absolute;
                bottom: 0px;
                right: 50px;
                border-radius: 3px;
                font-weight: 400;
                font-size: 16px;
                color: #fff;
                text-align: center;
            }

            .circulo
            {
                position: relative;
                overflow: hidden;
            }

            .circulo::before
            {
                content:"";
                display: block;
                margin-left: 5rem;
            }

            .circulo.circulo1
            {
                width: 350px;
                height: 350px;
                border-radius: 50%;
                margin: 1.5rem ;
                float: left;
                shape-outside: circle();
                background: url(https://placehold.co/500x500?text=Foto\\n500x500) no-repeat center;
                background-size: cover;
            }

            #about p
            {
                padding-top: 5rem;
            }

            #about p::after
            {
                content: "";
                clear: both;
                display: block;
            }

            .busca
            {
                position: absolute;
                top: 2%;
                right: 3%;
                /* transform: translate( -50%, -50% ); */
                height: 40px;
                width: 40px;
                border-radius: 40px;
                padding: 10px;
                background: #f1d204;
                transition: 0.4s;
            }

            .buscaBtn
            {
                color: #fff;
                float: right;
                width: 40px;
                height: 40px;
                border-radius: 40px;
                background: #f1d204;
                display: flex;
                justify-content: center;
                align-items: center;
                transition: 0.4s;
                position: absolute;
                top: 0;
                right: 0;
                border: none;
            }

            .buscaTexto
            {
                border: none;
                background: none;
                outline: none;
                float: left;
                padding: 0;
                color: white;
                font-size: 1rem;
                transition: 0.45s;
                width: 0;
            }

            .busca:hover
            {
                width: 240px;
            }

            .busca:hover > .buscaTexto
            {
                width: 240px;
                padding: 0 8px;
                margin-top: -2px;
            }

            .busca:hover > .buscaBtn
            {
                background: white;
                color: #f1d204;
            }

            .buscaTexto::placeholder
            {
                color: #fff;
            }

            header
            {
                background-size: 100%;
                background-position: center;
                animation: zoom-a 16s ease-in-out infinite, animate 16s ease-in-out infinite;
            }

            .ativo
            {
                color: var( --hover );
            }

            @keyframes animate
            {
                0%, 100%
                {
                    background-image: url(https://placehold.co/1920x1080?text=01\\n1920x1080);
                }
                25%
                {
                    background-image: url(https://placehold.co/1920x1080?text=02\\n1920x1080);
                }
                50%
                {
                    background-image: url(https://placehold.co/1920x1080?text=03\\n1920x1080);
                }
                75%
                {
                    background-image: url(https://placehold.co/1920x1080?text=04\\n1920x1080);
                }
            }

            @keyframes zoom-a
            {
                0% 
                {
                    background-size: 110% auto;
                }
                90%
                {
                    background-size: 100% auto;
                }
                100%
                {
                    background-size: 100% auto;
                }
            
            }

            .dropdown
            {
                position: relative;
                display: inline-block;
            }

            .dropdown ul
            {
                display: none;
                position: absolute;
                min-width: 160px;
                z-index: 1;
            }

            .dropdown ul li
            {
                list-style-type: none;
            }

            .dropdown:hover ul 
            {
                display: block;
            }

            #myBtn 
            {
                display: none; /* Hidden by default */
                position: fixed; /* Fixed/sticky position */
                bottom: 20px; /* Place the button at the bottom of the page */
                right: 30px; /* Place the button 30px from the right */
                z-index: 99; /* Make sure it does not overlap */
                border: none; /* Remove borders */
                outline: none; /* Remove outline */
                background-color: red; /* Set a background color */
                color: white; /* Text color */
                cursor: pointer; /* Add a mouse pointer on hover */
                padding: 15px; /* Some padding */
                border-radius: 10px; /* Rounded corners */
                font-size: 18px; /* Increase font size */
            }

            #myBtn:hover 
            {
                background-color: #555; /* Add a dark-grey background on hover */
            }

            #portfolio > div
            {
                display: grid;
                grid-template-columns: repeat( 8, 1fr );/* define a grade */
                grid-template-rows: repeat(8, 5vw);
                grid-gap: 15px;
                padding: 0vw 8vw 1vw 8vw;
            }

            #portfolio > div img
            {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            #portfolio > div figure:nth-child( 1 ) 
            {
                grid-column-start: 1;
                grid-column-end: 3;
                grid-row-start: 1;
                grid-row-end: 3;
            }
            
            #portfolio > div figure:nth-child( 2 ) 
            {
                grid-column-start: 3;
                grid-column-end: 5;
                grid-row-start: 1;
                grid-row-end: 3;
            }

            #portfolio > div figure:nth-child( 3 ) 
            {
                grid-column-start: 5;
                grid-column-end: 9;
                grid-row-start: 1;
                grid-row-end: 6;
            }

            #portfolio > div figure:nth-child( 4 ) 
            {
                grid-column-start: 1;
                grid-column-end: 5;
                grid-row-start: 3;
                grid-row-end: 6;
            }

            #portfolio > div figure:nth-child( 5 ) 
            {
                grid-column-start: 1;
                grid-column-end: 4;
                grid-row-start: 6;
                grid-row-end: 8;
            }

            #portfolio > div figure:nth-child( 6 ) 
            {
                grid-column-start: 4;
                grid-column-end: 9;
                grid-row-start: 6;
                grid-row-end: 8;
            }

            footer
            {
                height: 40vh;
                display: flex;
                justify-content: flex-end;
                flex-direction: column;
            }

        </style>

    </head>
    <body >

        <main class="container-fluid " style="padding: 0!important;" >

            <header id="topo" class="p-5" style="background-image: url(https://placehold.co/600x400?text=Banner\\n1920x1080);background-attachment: fixed; height: 100vh; width: 100%; background-size: cover;" >

                <div id="menu" class="d-flex flex-row justify-content-around mb-5" >

                    <figure>
                        <img src="https://placehold.co/200x80?text=Logo\n200x80" alt="">
                    </figure>

                    <nav class="col-8 d-flex flex-row justify-content-end" >
                        <a href="#topo"> Home </a>
                        <a href="#sobre"> Sobre </a>
                        <a href="#portfolio"> Portfolio </a>
                        <a href="#servicos"> Serviços </a>
                        <a href="#contato"> Contato </a>
                        <a href="#blog"> Blog </a>
                        <a href="#" class="dropdown" > 
                            Tecnologias  
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Bootstrap</li>
                                <li>Git</li>
                                <li>Deploy</li>
                            </ul>
                        </a>
                        {{-- route('home') . '#id' --}}
                    </nav>

                    <form class="busca">
                        <input class="buscaTexto" type="search" name="" placeholder="Digite para pesquisar" >
                        <button type="submit" class="buscaBtn">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>

                </div>

                <h1 class="text-center" style="margin-top: 30vh; font-size: 4.5rem;" >Texto.com.pontos</h1>

                <p class="text-center col-6 mx-auto ">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non luctus metus. Fusce nisl diam, aliquam nec pharetra ac, cursus non diam.
                </p>

                <div class="d-flex flex-row justify-content-center m-5">

                    <button class="botao" > Botão </button>

                    <button class="botao2" > Botão </button>

                </div>

            </header>

        </main>

        <section id="about" style="padding-left: 8vw;" >

            <h2> Sobre </h2>

            <figure class="circulo circulo1"></figure>

            <p class="col-8 mx-auto" >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non luctus metus. Fusce nisl diam, aliquam nec pharetra ac, cursus non diam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non luctus metus. Fusce nisl diam, aliquam nec pharetra ac, cursus non diam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non luctus metus. Fusce nisl diam, aliquam nec pharetra ac, cursus non diam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non luctus metus. Fusce nisl diam, aliquam nec pharetra ac, cursus non diam.
            </p>

        <div class="col-8 mx-auto d-flex flex-row pb-5">

            <div class="progress-box col-4" >

                <h3 class="text-center h4">Linguagens</h3>

                <div class="progress-item" >
                    <div class="d-flex align-items-center justify-content-between" >

                        <h2 > It Consultion </h2>

                    </div>
                    <div class="progress" >

                        <div data-aos-duration="1000" data-aos="fade-right" class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                        <span data-aos-duration="1000" data-aos="fade-right" >23%</span>

                    </div>
                </div>

                <div class="progress-item" >
                    <div class="d-flex align-items-center justify-content-between" >
                        <h2 >It Consultion</h2>
                    </div>
                    <div class="progress" >
                    <div data-aos-duration="1000" data-aos="fade-right" class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

            </div>

            <div class="progress-box col-4" >
                <h3 class="text-center h4"> Softwares </h3>
                <div class="progress-item" >
                    <div class="d-flex align-items-center justify-content-between" >
                        <h2 >It Consultion</h2>
                    </div>
                    <div class="progress" >
                    <div data-aos-duration="1000" data-aos="fade-right" class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress-item" >
                    <div class="d-flex align-items-center justify-content-between" >
                        <h2 >It Consultion</h2>
                    </div>
                    <div class="progress" >
                    <div data-aos-duration="1000" data-aos="fade-right" class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

            </div>
        </div>
        </section>

        <section id="portfolio" >
            <h2> Portfolio </h2>
            {{-- Grade 8x8 --}}

            <div>
                <figure >
                    <img src="https://placehold.co/500x500?text=01" alt="Image 1">
                </figure>
                <figure >
                    <img src="https://placehold.co/500x500?text=02" alt="Image 2">
                </figure>
                <figure >
                    <img src="https://placehold.co/500x500?text=03" alt="Image 3">
                </figure>
                <figure >
                    <img src="https://placehold.co/500x500?text=04" alt="Image 4">
                </figure>
                <figure >
                    <img src="https://placehold.co/500x500?text=05" alt="Image 5">
                </figure>
                <figure >
                    <img src="https://placehold.co/500x500?text=06" alt="Image 6">
                </figure>
            </div>

        </section>

        @yield('content')

        <footer id="footer" style="background: #292825;" >
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div id="text-5" class="widget widget_text">
                            <div class="widget-title">
                                <h5 style="color: #fff;" >PRODUCTS</h5>
                            </div> 
                            <div class="textwidget">
                                <ul>
                                    <li><a href="#" title="Our work">Our work</a></li>
                                    <li><a href="#" title="Club">Club</a></li>
                                    <li><a href="#" title="News">News</a></li>
                                    <li><a href="#" title="Announcement">Announcement</a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>

            </div>

            <p class="py-4 text-center" style="background: #242320; color: #fff; margin: 0;"> <span class="bottom-copyright" data-customizer="copyright-credit"> © Copyright 2017. All Rights Reserved. </span>
            </p>
        </footer>

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" ></script>

        <script type="text/javascript" defer >

            AOS.init();

            // botão para o topo
            let mybutton = document.getElementById("myBtn");
            // menu superior
            let nav = document.querySelector("#menu");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() 
            {
    
                // Botão para o topo
               
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) 
                {
                    mybutton.style.display = "block";
                } 
                else 
                {
                    mybutton.style.display = "none";
                }

                // menu reposicionamento

                if(  window.scrollY > 0  )
                {
                    nav.classList.add("fixa");
                }
                else
                {
                    nav.classList.remove("fixa");
                }


            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() 
            {
                document.body.scrollTop = 0; // For Safari
                document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            }

            /*let sections = document.querySelector("section");
            let links = document.querySelector("#menu nav a");
            

            window.onscroll = () => {

                

                /*sections.forEach( sec => {

                    let top = window.scrollY;
                    let offset = sec.offsetTop;
                    let height = sec.offsetHeight;
                    let id = sec.getAttribute("id");

                    if( top >= offset && top < offset + height )
                    {
                        links.classList.remove( 'ativo' );
                        document.querySelector( 'header nav a[href*=' + id + ']' ).classList.add( "ativo" );
                    }

                }); 
            }   */        

        </script>

    </body>
</html>
