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
  <h1>Banco de Dados - Detalhe</h1>
  <p>Detalhes de um item</p> 
</div>
  
<div class="container-fluid mt-3">
  <h1>Detalhes do item</h1>
  <p>Abaixo os detalhes de um item da lista.</p> 

  <?php
    $id = $_GET['id'];
  ?>


  <?php
    include("../banco_dados_conexao.php");
    try {
      $sth = $dbh->prepare("SELECT * FROM jogos WHERE id = ?");
      $sth->bindParam( 1, $id );
      $sth->execute();
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      if(!empty($result)) {
        echo "<br><b>id</b>: ". $result[0]['id'];
        echo "<br><b>Nome:</b>: ". $result[0]['nome'];
        echo "<br><b>Estudio</b>: ". $result[0]['estudio'];
        echo "<br><b>Ano de Estreia</b>: ". $result[0]['anoEstreia'];
        echo "<br><b>Genero</b>: ". $result[0]['genero'];
        echo "<br><b>Tempo de Duração</b>: ". $result[0]['tempoDuracao'];
      } 
      $dbh = null;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      die();
    }
  ?>

<br><br>

<a href="excluir.php?id=<?php echo $id; ?>" class="btn btn-danger">
    <img src="/ProjectPHP-main/img/trash.png" width="15" /> Excluir
</a>

<a href="editar_formulario.php?id=<?php echo $id; ?>" class="btn btn-info text-white">
    <img src="/ProjectPHP-main/img/pencil.png" width="15" /> Editar
</a>

<br><br>

<a href="index.php">Voltar</a>

<br><br>
Fontes:
<ul>
<li><a href="https://www.flaticon.com" target="new">https://www.flaticon.com</a></li>
</ul>



</div>



<br><br>
</body>
</html>

