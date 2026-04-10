<?php
require('conexao.php');
if (isset($_POST['cod'])) {
    $codigo = $_POST['cod'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data = $_POST['data'];

    $sql = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha', data_cadastro='$data' WHERE cod=$codigo";
    $res = $conn->query($sql);
    if ($res == true) {
        print "<script>alert('Registro atualizado com sucesso!');</script>";
    } else {
        print "<script>alert('Erro ao atualizar o registro!');</script>";
    }
}header('location:lista.php');
?>