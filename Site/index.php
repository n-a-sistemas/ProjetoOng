<?php

session_start();
if(!isset($_SESSION['id_usuario'])){
    header('Location: Login');
}
if($_SESSION['id_usuario'] == 0){
    header('Location: Estoque');
}else{
    header('Location: relatoriofinanceiro');
}