<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> Painel do Sistema</title>
</head>
<body>
   
<?php
    
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["tel"];

include_once'conexao.php';

$sql ="INSERT INTO clientes VALUES (null,'$nome','$email','$telefone')";


if(mysqli_query($con,$sql)){
    echo"Gravado com sucesso";
}else{
    echo"Erro ao gravar cliente";
    mysqli_error($con);
}

mysqli_close($con);

?>
<br><br>
<a href="index.php" class="btn btn-primary">Página inicial</a>
    
</body>
</html>