@extends( '_temas.dashboard' )

<?php
    $idioma = "pt-br";
    $titulo = "Painel de Controle - Usuários";
?>

@section('conteudo')

    {{-- Exibe os usuários --}}
    @if ( request()->route('op') == null  )

        Exibe usuarios

    @endif

    @if ( request()->route('op') == 'cadastrar'   )

        Cadastro de usuarios

    @endif

    @if ( request()->route('op') == 'alterar'   )

        Alterar usuarios

    @endif

    @if ( request()->route('op') == 'excluir'   )

        Excluir usuarios

    @endif

@endsection
