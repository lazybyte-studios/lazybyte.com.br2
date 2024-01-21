@extends( '_temas.dashboard' )

<?php
    $idioma = "pt-br";
    $titulo = "Painel de Controle";
?>

@section('conteudo')


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

@endsection
