<?php 
    /*session_start();*/
    $acesso = $_SESSION['acesso'];
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow">
          
        <a class="navbar-brand" href="#">
            <img src="../logocantinho.png" width="120" class="img-fluid d-inline-block" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <?php
                    if($acesso == true){
                        echo '<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Relatórios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../RelatorioFinanceiro">Relatório Financeiro</a>
                            <a class="dropdown-item" href="../RelatorioDoacao">Relatório de doações</a>
                        </div>
                        </li>';
                        echo '<li class="nav-item">
                        <a class="nav-link" href="../CadastrarUsuarios">Cadastrar Usuários</a>
                        </li>';                        
                    }
                    else{
                        echo'<li class="nav-item">
                            <a class="nav-link" href="../CadastrarProdutos">Cadastrar Produtos</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link" href="../CadastrarDoacoes">Cadastrar Doações</a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" href="../Caixa">Caixa</a>
                        </li>';
                    }
                ?>
                <li class="nav-item">
                        <a class="nav-link" href="../Estoque">Estoque</a>
                </li>
                <li  class="nav-item">
                    <a class="nav-link" href="../despesas/form.php">Despesas</a>
                </li>
                <li  class="nav-item">
                    <a class="nav-link" href="../MeuPerfil">Meu perfil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../Login">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <link rel="icon" href="../logoigreja.png" type="image/png" sizes="16x16">
</header>