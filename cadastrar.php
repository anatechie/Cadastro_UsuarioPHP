<?php
require_once('conexao.php');
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"]; 
$data = $_POST["data"];

$sql = "insert into usuarios values(null,'{$nome}','{$email}','{$senha}','{$data}')";
$res = $conn->query($sql);
if($res==true){
    print "<script> alert('Cadastro efetuado com sucesso!');</script>";
    print "<script> location.href='lista.php';</script>";
}else{
    print "<script> alert('Não foi possível efetuar o cadastro! Verifique');</script>";
    print "<script> location.href='lista.php';</script>";
}

