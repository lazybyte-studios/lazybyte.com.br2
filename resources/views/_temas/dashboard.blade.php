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
    
    </head>

    <body>

        <main class="container-fluid p-0">

            <ul class="navbar-nav bg-secondary col-md-2 bg-gradient-primary sidebar sidebar-dark accordion  " id="menuLateral" >
                
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

                <a class="sidebar-brand d-flex align-items-center justify-content-center mt-4 " data-bs-toggle="collapse" href="#menuLateral" role="button" aria-expanded="false" aria-controls="menuLateral" ><i class="bi bi-arrow-left-circle h3 text-white"></i></a>

            </ul>

            <section class="d-flex flex-column" >

                <header class="bg-white p-3 ">
                                        
                </header>

                <section id="conteudo" class="container-fluid p-5">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cards</h1>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4" style="border-left: 0.25rem solid #36b9cc; border-radius: 10px;" >
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tarefas
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                    <i class="bi bi-clipboard-check-fill h2 text-black-50"></i>
                                </div>
                            </div>
                        </div>
                    </div>                    

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