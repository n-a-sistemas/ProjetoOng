<?php
    $html = file_get_contents('base.html');
    $html = str_replace('{TITULO}', 'Cadastro de produtos', $html);
    $html = str_replace('{NOME}', 'Cadastro de produtos', $html) ;
    
    $formcad = file_get_contents('ex-cad.php');
    $html = str_replace('{CONTEUDO}', $formcad , $html);

    $menu = file_get_contents('../ProjetoOng/Site/menu.php');
    $html = str_replace('{MENU}', $menu, $html);

    echo $html;
?>