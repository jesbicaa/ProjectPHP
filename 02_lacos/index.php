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
  <h1>Laços Encadeados</h1>
  <p>Laços encadeados, ou aninhados, são laços dentro de laços.</p> 
</div>
  
<div class="container-fluid mt-3">
  <h1>Tabuadas do 1 ao 100</h1>
  <p>Neste exemplo, laços encadeados são usados para construir as tabuadas do 1 ao 100.</p>
  <div class="row">
    <?php 
    
    for($n=1;$n<=100;$n++){
      echo "<div class='col p-3 m-2'><div class='card' style='width:10rem;'><div class='card-header'>Tabuada do " . $n . "</div><div class='card-body'>";
      for($k=1;$k<=10;$k++){
        echo $n . " X ". $k . " = " . ($n*$k) . "<br>";
      }
      echo "</div></div></div>";
    }
    
    ?>
  </div>
</div>

<br><b>
</body>
</html>