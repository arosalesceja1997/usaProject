<div id="placas" class="shadow-sm">
  <img src="https://i.imgur.com/YQSHhmS.png">
  <p style="font-weight: bolder;font-size: 18px;">Últimas placas añadidas en el Hotel</p>
  <p style="color: #7d7d7d;font-size: 16px;">¿Y tú ya las conseguiste?</p>
  <div class="container mt-5" id="containermt">
    <div class="row">
      <div class="owl-two owl-carousel owl-theme">
        <?php
          $data = $db->query("SELECT * FROM habbo_placas ORDER BY id DESC LIMIT 20");
          foreach ($data as $row) {
            echo '<div class="item">';
              echo '<div class="placass"><img src="'.$row['imagen'].'"></div>';
            echo '</div>';
          }
        ?>
      </div>
    </div>
  </div>
</div>
