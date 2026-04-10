<?php
    if(!empty($_GET['cod'])){
        include('conexao.php');
        $cod = $_GET['cod'];

        $sql = "select * from usuarios where cod = $cod;";

        $res = $conn -> query($sql);
        if($res -> num_rows > 0){

            $sql2 = "delete from usuarios where cod = $cod;";
            $res2 = $conn -> query($sql2);

        }
    }

    header("Location: lista.php");
?>