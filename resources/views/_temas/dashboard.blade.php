<!DOCTYPE html >
<html lang="{{ $idioma }}" class="claro" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $titulo }}</title>

        <link rel="stylesheet" href="{{ asset('css/bs/bootstrap.min.css' ) }}">

        <link rel="stylesheet" href="{{ asset('css/bs_icons/font/bootstrap-icons.min.css' ) }}">

        <link rel="stylesheet" href="{{ asset('css/admin.css' ) }}">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <script src="{{ asset('js/bs/bootstrap.bundle.min.js') }}" defer ></script>

        <script src="{{ asset('js/admin.js') }}" defer ></script>
    
    </head>

    <body >

        <main class="container-fluid p-0">

            <ul class="navbar-nav bg-secondary col-md-2 bg-gradient-primary sidebar sidebar-dark accordion toggled  " id="menuLateral" >
                
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <img src="{{ asset( 'imagens/dev.png' )}}" class="d-block col-6 mx-auto my-3" >
                    </div>
                    <div class="sidebar-brand-text mx-3 d-none">DevApp</div>
                </a>

                <hr class="sidebar-divider my-0">

                <li class="nav-item ativo">
                    <a class="nav-link" href="index.html" >
                        <i class="bi bi-speedometer2"></i>
                        <span>Painel</span>
                    </a>
                </li>
                
                <hr class="my-0">

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" >
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Usuários</span>
                    </a>
                    <hr class="my-0">
                    <div id="collapseExample" class="collapse col-md-10 mx-auto" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-3 rounded-2">
                            <a class="sub" href="#">Buttons</a>
                            <a class="sub" href="#">Cards</a>
                        </div>
                    </div>
                </li>

                <a class="sidebar-brand d-flex align-items-center justify-content-center mt-4 " onclick="esconde()" ><i class="bi bi-arrow-left-circle h3 text-white" style="cursor: pointer;" ></i></a>

            </ul>

            <section class="d-flex flex-column" >

                <header class="bg-white p-3 " >

                    <ul class="navbar-nav d-flex flex-row justify-content-end " id="itens">

                        <li class="nav-item col-1">

                            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2" >
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle col-3" src="https://placehold.co/500x500">
                            </a>

                            <div id="collapseExample2" class="collapse col-md-12 mx-auto position-absolute" aria-labelledby="headingTwo" data-parent="#itens">
                                <div class="bg-white py-3 rounded-2">
                                    <a class="sub" href="#">Buttons</a>
                                    <hr class="my-0">
                                    <a class="sub" href="#">Cards</a>
                                </div>
                            </div>

                        </li>

                    
                    </ul>                                       
                </header>

                <section id="conteudo" class="container-fluid p-5">

                    @yield('conteudo')                    

                </section>

                <footer class="sticky-footer bg-white p-3">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>

            </section>

        </main>        
    
    </body>

</html>