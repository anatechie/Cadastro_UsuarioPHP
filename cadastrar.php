<?php
//incluir arquivo
require_once('conexao.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$data_cadastro = $_POST["data_ cadastro"];


$sql = "insert into usuarios
	values(null, '${nome}', '${email}', '${senha}', '${data_cadastro}');";

//resp verifica se a conexao aconteceu
$resp = $conn -> query($sql);
if($resp == true){
    print("<script> alert('Cadastro realizado com sucesso!'); </script>");
    print("<script> location.href = 'crud.html';</script>");
}else{
    print("<script> alert('Não foi possivel cadastrar'); </script>");
    print("<script> location.href = 'crud.html';</script>");
}






?>