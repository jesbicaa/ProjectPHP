



<div class="container">
  <h1>Carrossel</h1>
  <p>A forma de exebição de imagens aqui é em carrossel.</p>
  <p>Basta incluir arquivos de imagens na pasta para que elas sejam exibidas no carrossel.</p>



<?php
$dir    = 'C:/wamp64/www/ProjectPHP-main/03_array/img';
$files = scandir($dir);

?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
      <?php 
      $n=0;
      foreach($files as $file){
        if($file!='.' && $file!='..'){
        if($n==0){
          echo "<button type='button' data-bs-target='#myCarousel' data-bs-slide-to='0' class='active'></button>";
        } else {
          echo "<button type='button' data-bs-target='#myCarousel' data-bs-slide-to='$n'></button>";
        }
        $n++;
        }
      }
      ?>
    </div>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      

      <?php 
      $n=0;
        foreach($files as $file){
          if($file!='.' && $file!='..'){
          if($n==0){
            echo "<div class='carousel-item active'>";
            echo "<img src='img/$file' style='width:100%;'>";
            echo "<div class='carousel-caption'>";
            echo "<h3>$file</h3>";
            echo "<p>$file</p>";
            echo "</div>";
            echo "</div>";
          } else {
            echo "<div class='carousel-item'>";
            echo "<img src='img/$file' style='width:100%;'>";
            echo "<div class='carousel-caption'>";
            echo "<h3>$file</h3>";
            echo "<p>$file</p>";
            echo "</div>";
            echo "</div>";
          }
          $n++;
        }
        }
      ?>


  
    </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

  </div>





  </div>
  