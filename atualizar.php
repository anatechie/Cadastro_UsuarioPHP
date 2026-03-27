<?php

include('conexao.php');
if(!empty($_GET['cod'])){
    $codigo = $_GET ['cod'];
    $sql = "Select * from usuarios where cod = $codigo";
    $res = conn -> query($sql);

   if($res == true) {
        while($row = mysqli_fetch_assoc($res)){
             //campos com parametro
             $nome = $row['nome'];
             $email = $row['email'];
             $senha = $row['senha'];
             $data_cadastro = $row['data_cadastro'];
        }

    }else{
        print "<script> alert('Registro não encontrado!');</script>";
    }
}
?>