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
  <h1>Introdução</h1>
  <p>Entrada, Processamento e Saída de dados.</p> 
</div>

<div class="container-fluid mt-3">
  <h1>Dobrar Receita</h1>
  <p>Neste exemplo, recebemos um número e multiplicamos cada ingrediente da receita.</p>
    
    <h5>Mousse de limão</h5>

    <?php
        echo "Multiplicando por: " . $_POST['num'];
        echo "<br>" . $_POST['num'] . " lata de leite condensado";
        echo "<br>" . $_POST['num'] . " lata de creme de leite";
        echo "<br>" . (1.5) * $_POST['num'] . " xícara de suco de limão";
    ?>

<br>
<a href="index.php">Calcular novamente</a>

</div>

</body>
</html>

