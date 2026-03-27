<?php
require('conexao.php');

if(isset($_POST['cod'])){
    $codigo = $_POST['cod'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_cadastro = $_POST['data_cadastro'];

    $sql = "update usuarios set nome = '$nome', senha ='$senha', data_cadastro = '$data_cadastro' where cod ='$codigo'";
    $res = $conn -> query($sql);
}