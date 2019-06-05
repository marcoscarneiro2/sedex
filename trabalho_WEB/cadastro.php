<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Painel do Sistema</title>
</head>
<body style="background:gray">
    <br><br><br><br><br><br><br><br>
     <form action="gravar.php" method="post" class="container col-4" style="background:white;height:450px;width:500px;border-radius:20%">
    <br><br>
  <h1>Cadastro Cliente</h1>
    
     <div class="form-group" >
    <label for="exampleInputEmail1">Nome:</label>
    <input type="text" class="form-control" id="nome" name="nome"  placeholder="Nome"  required>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">E-mail:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Telefone:</label>
    <input type="tel" class="form-control" id="tel" name="tel" placeholder="Telefone">
  </div>
  
   
    <a style="margin-right:5%;margin-left:5%" href="index.php" class="btn btn-primary">Página Inicial</a>
  <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
<br>
  
</body>
</html>