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
  
  <?php
    include("../banco_dados_conexao.php");
    try {
      $id = $_GET['id'];
      $stmt = $dbh->prepare("DELETE FROM jogos WHERE id = ?");
      $stmt->bindParam( 1, $id );
      if($stmt->execute()) {
        ?>
        <div class="alert alert-success" role="alert">
          Dado excluído com sucesso!
          <br>
          <a href="index.php">Voltar</a>
        </div>
        <?php
      }
  } catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
  }
?>
    

  

</div>

<br><br>
</body>
</html>

