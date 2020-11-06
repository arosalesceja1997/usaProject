<div id="sidebar">
  <div id="hobba">
    <div id="barra-title">
      <div id="img-title">
        <img
          src="https://2.bp.blogspot.com/-wHCckN2nKKk/XcmmkS83LcI/AAAAAAABZVM/uw3DybhXt_k4_zICD332MKkNCci5MtsvwCKgBGAsYHg/s1600/pins.gif"
        />
      </div>
      <div id="descrip">
        <p id="des1">Eventos Hobba</p>
        <p id="des2">Eventos del día de hoy</p>
      </div>
	</div>
	
	<?php
        $data = $db->query("SELECT * FROM `eventos-2` ORDER BY id DESC LIMIT 3");
        foreach ($data as $row) {
          echo '<div id="articulo" class="mt-1">';
            echo '<div class="imgg">';
              echo '<img src="'.$row['imagen'].'" />';
            echo '</div>';
            echo '<p class="pg1">';
            echo $row['titulo'];
            echo '</p>';
            echo '<p class="pg2">';
            echo 'Organiza: <b>'.$row['publicador'].'</b>';
            echo '</p>';
          echo '</div>';
        }
	?>
	
  </div>

  <div id="hobba">
    <d5iv id="barra-title">
      <div id="img-title">
        <img
          src="https://4.bp.blogspot.com/-98NzMNGUpDs/XJqiNlyTluI/AAAAAAABN0Q/_ICDIhbsXZoAc3HlXA9GuGKug1zbeBQKgCKgBGAs/s1600/15081889415262082.gif"
        />
      </div>
      <div id="descrip">
        <p id="des1">Destacados LUFantasie</p>
        <p id="des2">¡Nuestra comunidad crece!</p>
      </div>
    </d5iv>
    
    <?php
      $data = $db->query("SELECT * FROM usuarios WHERE destacados=1 ORDER BY rango LIMIT 3 ");
      foreach ($data as $row) {
        echo '<div id="destacados" class="mt-1">' .
          '<div class="destacados-img">' .
            '<img src="'.$row['imagen'].'" />'.
          '</div>'.
          '<div class="destacados-user" style="font-weight: bolder; margin-top: 7px">'.
            '<img src="./img/perfil.png" style="margin-top: -5px; padding-right: 10px"/>'.
            $row['nombre'].
          '</div>'.
          '<div class="destacados-user">'.
            '<img src="./img/trofeo.png" style="margin-top: -5px; padding-right: 10px"/>'.
            $row['rango'].
          '</div>'.
        '</div>';
      }
    ?>

  </div>

  <div id="hobba">
    <div id="barra-title">
      <div id="img-title">
        <img
          src="https://1.bp.blogspot.com/-KNfZH2uRYKQ/XK0oYpacyqI/AAAAAAABOsg/JvXUkVqmuU8eHE0eOZtjVosY2PiIEqGKQCKgBGAs/s1600/Image%2B524.png"
        />
      </div>
      <div id="descrip">
        <p id="des1">Última del Hotel</p>
        <p id="des2">¡Nuevas actualizaciones!</p>
      </div>
    </div>

    <div class="boxplacas">
      <!-- <div
        id="furnis"
        class="btn btn-lg btn-danger"
        role="button"
        data-toggle="popover"
        data-trigger="focus"
        title="Dismissible popover"
      >
        <img src="https://www.habbocreate.com/images/furni/furni7749.gif" />
      </div> -->
      <?php
        $data = $db->query("SELECT * FROM ropa_placas ORDER BY id LIMIT 10");
        foreach ($data as $row) {
          echo '<div id="u-placas" data-toggle="popover" data-trigger="hover" data-content="'.$row['descripcion'].'" title="'.$row['titulo'].'">';
            echo '<img src="'.$row['imagen'].'" />';
          echo '</div>';
        }
      ?>
    </div>
  </div>

  <div id="hobba">
    <div id="barra-title">
      <div id="img-title">
        <img
          src="https://1.bp.blogspot.com/-KNfZH2uRYKQ/XK0oYpacyqI/AAAAAAABOsg/JvXUkVqmuU8eHE0eOZtjVosY2PiIEqGKQCKgBGAs/s1600/Image%2B524.png"
        />
      </div>
      <div id="descrip">
        <p id="des1">Últimas placas añadidas</p>
        <p id="des2">¡Es hora de conseguirlas!</p>
      </div>
    </div>

    <div class="boxplacas">
      <?php
        $data = $db->query("SELECT * FROM rares_placas ORDER BY id DESC LIMIT 10");
        foreach ($data as $row) {
          echo '<div id="u-placas" data-toggle="popover" data-trigger="hover" data-content="'.$row['descripcion'].'" title="'.$row['titulo'].'">';
            echo '<img src="'.$row['imagen'].'" />';
          echo '</div>';
        }
      ?>
      <!-- <div id="u-placas">
        <img src="https://www.habborator.org/badges/badges/GLB.gif" />
      </div> -->
    </div>
  </div>

  <div id="hobba">
    <div id="barra-title">
      <div id="img-title">
        <img
          src="https://1.bp.blogspot.com/-KNfZH2uRYKQ/XK0oYpacyqI/AAAAAAABOsg/JvXUkVqmuU8eHE0eOZtjVosY2PiIEqGKQCKgBGAs/s1600/Image%2B524.png"
        />
      </div>
      <div id="descrip">
        <p id="des1">Facebook</p>
        <p id="des2">¡Dale un like!</p>
      </div>
    </div>
    <div
      style="
        width: 100%;
        border: 1px solid #e2e2e2;
        border-radius: 4px;
        background: #f5f5f5;
      "
    >
      <div
        class="fb-page"
        data-href="https://www.facebook.com/LUFantasieWeb/"
        data-tabs="timeline,events"
        data-width=""
        data-height="300"
        data-small-header="true"
        data-adapt-container-width="true"
        data-hide-cover="false"
        data-show-facepile="true"
      >
        <blockquote
          cite="https://www.facebook.com/LUFantasieWeb/"
          class="fb-xfbml-parse-ignore"
          id="fb"
        >
          <a href="https://www.facebook.com/LUFantasieWeb/">LUFantasie</a>
        </blockquote>
      </div>
    </div>
  </div>

  <div id="hobba">
    <div id="barra-title">
      <div id="img-title">
        <img
          src="https://1.bp.blogspot.com/-KNfZH2uRYKQ/XK0oYpacyqI/AAAAAAABOsg/JvXUkVqmuU8eHE0eOZtjVosY2PiIEqGKQCKgBGAs/s1600/Image%2B524.png"
        />
      </div>
      <div id="descrip">
        <p id="des1">Publicidad</p>
        <p id="des2">¡Ayúdanos dando un clic!</p>
      </div>
    </div>
    <div
      style="
        width: 100%;
        height: 100px;
        border: 1px solid #e2e2e2;
        border-radius: 4px;
        background: #f5f5f5;
      "
    ></div>
  </div>
</div>
