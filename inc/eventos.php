<div id="eventos" class="shadow-sm">
  <div class="container mt-5">
    <div class="row">
      <div class="owl-one owl-carousel owl-theme">
        <?php
          $data = $db->query("SELECT * FROM eventos ORDER BY id DESC LIMIT 10");
          foreach ($data as $row) {
            echo '<div class="item1">';
              echo '<div id="evento-item" style="background-image: url('.$row[imagen].');">';
                echo '<div class="item-texto">';
                  echo '<p>'.$row['titulo'].'</p>';
                  echo '</div>';
                  echo '<div class="item-texto2">';
                  // echo '<p>Descripción del evento</p>';
                  echo $row['descripcion'];
                echo'</div>';
                echo '<a href="">';
                  echo '<div class="item-texto3" onclick="verMas('.$row['id'].')">';
                    echo '<p>Ver más</p>';
                  echo '</div>';
                  echo '</a>';
              echo '</div>';
            echo '</div>';
          }
        ?>
      </div>
    </div>
  </div>
</div>