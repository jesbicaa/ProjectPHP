

<div class="container">
  <h1>Listando imagens de um diretório</h1>
  <p>Neste exemplo, os endereços das imagens contidas em um diretório são armazenados em um array.</p>
  <p>Então, faz-se a iteração neste array para exibir todas a imagens na tela em forma de galeria.</p>
  <div class="row">

  <?php
  $dir    = 'C:/wamp64/www/ProjectPHP-main/03_array/img';
  $files = scandir($dir);
  foreach($files as $file){
    if($file != "." AND $file != "..") {
      echo "<div class='col'>";
      echo "<div class='img-thumbnail m-1 p-1'>";
      echo "<a href='img/$file'>";
      echo "<img src='img/$file' style='width:100%'>";
      echo "</a>";
      echo "<div class='caption'>";
      echo "<p>$file</p>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    }
  }
  ?>




  </div>
</div>