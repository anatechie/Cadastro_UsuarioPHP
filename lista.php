<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
 <div class="container"> <!--.container, classe reorganiza o codigo com alinhamento adequado--> 

<?php

include('conexao.php');
print('<h2> Lista de usuários </h2>');
print('<br> <br> <hr>');

$sql = "select * from usuarios";
$res = $conn -> query($sql);
$qtd = $res -> num_rows;

if($qtd > 0){
    print'<table class = "table table-hover table-striped table-bordered">';

    print "<tr>";

    print "<th> Código </th>";
    print "<th> Nome </th>";
    print "<th> Email </th>";
    print "<th> Senha </th>";
    print "<th> Data Cadastro </th>";
    print "<th> Ações </th>";

    print "</tr>";


    while($row = $res->fetch_object()){ //fetch retorna variaveis em forma de array, varios dados em campos. Retorna em forma de obj, enquanto o $row monta cada linha, while repete a quantidade que tem no banco
         
        print"<tr>";

        print"<td>".$row->cod."</td>"; //. é para concatenar com as linhas
        print"<td>".$row->nome."</td>";
        print"<td>".$row->email."</td>";
        print"<td>".$row->senha."</td>";
        print"<td>".$row->data_cadastro."</td>";
        print"<td>  <button class = 'btn btn-primary' onclick = location.href='atualizar.php?cod=$row->cod'> Editar </button>
              <button class = 'btn btn-danger'> Excluir </button></td>";

        print'</tr>';

    }
    print '</table>';
}else{
   // print("<p class = 'alert alert-danger'> Não foram encontrado resultados!</p>");
    print("<p> Não foram encontrado resultados!</p>");
}





?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>