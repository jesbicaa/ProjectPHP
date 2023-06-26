<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="Estilo/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php include("../menu.php"); ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <br>
      <h3>Macaco Fio</h3>
      <p>Macaco, Um Macaquinho</p>
      <p>Nosso Macaco, Nossa Felicidade</p>

      <div id="demo" class="carousel slide" data-bs-ride="carousel" style="align-items: center;">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
    
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item">
            <img src="img/MacacoBack.jpg" alt="Macaco Beck" class="d-block w-100">
          </div>
          <div class="carousel-item">
              <img src="img/MacacoFio.jpg" alt="Macaco Fio" class="d-block w-100">
          </div>
          <div class="carousel-item active">
            <img src="img/LogoMacaco.jpg" alt="Macaco Fio Jr." class="d-block w-100">
          </div>
        </div>
    
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        </button>
  </div>
    </div>

    <div class="col-sm-8">
      <img class="img-fluid" src="img/MacacoFio.jpg" alt="Macaco Fio">
    </div>
  </div>
</div>

<div class="mt-5 p-3 bg-dark text-white text-center fixed-bottom">
  <p>Dia do Macaco: 14 de dezembro!</p>
</div>

</body>
</html>


