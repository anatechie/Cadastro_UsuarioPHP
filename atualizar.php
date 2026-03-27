<?php

include('conexao.php');
if(!empty($_GET['cod'])){
    $codigo = $_GET ['cod'];
    $sql = "Select * from usuarios where cod = $codigo";
    $res = $conn -> query($sql);

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

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h2>Atualizar dados do Usuário</h2>
    <br>
    <br>


<form class="row g-3" action="update.php" method="post">
  <div class="col-12">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputNome" name ="nome" value="<?php echo $nome?>">
  </div>


  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail" name ="email" value="<?php echo $email?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Senha</label>
    <input type="password" class="form-control" id="inputPassword" name ="senha" value="<?php echo $senha?>">
  </div>
  
  
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Data Cadastro</label>
    <input type="date" class="form-control" id="inputZip" name ="data_cadastro" value="<?php echo $data_cadastro?>">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary" >Atualizar</button>
    <input type="hidden" name="cod" value = "<?php echo $codigo ?>">
  </div>
</form>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
