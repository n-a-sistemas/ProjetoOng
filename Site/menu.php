<?php session_start();

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
                            <a class="dropdown-item" href="../RelatorioFinanceiro/index.php">Relatório Financeiro</a>
                            <a class="dropdown-item" href="../RelatorioDoacao/RelatorioDoacao.php">Relatório de doações</a>
                        </div>
                        </li>';
                        echo '<li class="nav-item">
                        <a class="nav-link" href="../CadastrarUsuarios/form.php">Cadastrar Usuários</a>
                        </li>';                        
                    }
                    else{
                        echo'<li class="nav-item">
                            <a class="nav-link" href="../CadastrarProdutos/index.php">Cadastrar Produtos</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link" href="../CadastrarProdutos/formDoacoes.php">Cadastrar Doações</a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" href="../Caixa/form.php">Caixa</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../Estoque/form.php">Estoque</a>
                        </li>';
                    }
                ?>
                <li  class="nav-item">
                    <a class="nav-link patual" href="../MeuPerfil/perfil.php">Meu perfil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../Login/login.php">Sair</a>
                </li>
            </ul>
        </div>

        <!-- https://work.smarchal.com/twbscolor/ Trocar cor do nav -->
    </nav>
    <link rel="icon" href="../logoigreja.png" type="image/png" sizes="16x16">
</header>

