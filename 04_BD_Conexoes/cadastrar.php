<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistemas Web Responsivos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<?php include("../menu.php"); ?>

<div class="container-fluid p-5 bg-dark text-white text-center">
  <h1>Banco de Dados - Tela de cadastro</h1>
  <p>Responsividade com Bootstrap e Media Queries</p> 
</div>
  
<div class="container-fluid mt-3">
  <h1>Cadastrar Jogos</h1>
  <br>
  <form name="myForm" action="action_page.php" onsubmit="return validateForm()" method="post">
    <div class="row">
      <div class="col-md-6 mt-1">
        <label for="col-01">Nome:</label>
        <input type="text" class="form-control" id="col-01" placeholder="Valor para Nome" name="col-01">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-02">Estudio:</label>
        <input type="text" class="form-control" id="col-02" placeholder="Valor para Estudio" name="col-02">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-03">Ano de Estreia:</label>
        <input type="text" class="form-control" id="col-03" placeholder="Valor para Ano de Estreia" name="col-03">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-04">Genero:</label>
        <input type="text" class="form-control" id="col-04" placeholder="Valor para Genero" name="col-04">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-05">Tempo de Duraçao:</label>
        <input type="text" class="form-control" id="col-05" placeholder="Valor para Tempo de Duraçao" name="col-05">
      </div>
    </div>
    <div class="row">
      <div class="col m-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  <a href="index.php">Voltar</a>
</div>

<br><b>
</body>
</html>

