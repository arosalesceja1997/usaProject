</div>
<footer>

  <div
    style="left: 50%;
	position: absolute;
	float: left;
	margin-left: -600px;
	height: 140px;width: 140px;border-radius: 50%;background:#84c7d0;align-items: center;justify-content: center;display: flex;border: 1px solid #84c7d0;">
    <img src="./img/hobba_fansite.png" style="margin-top: -20px;"></div>
  <p>Términos y Condiciones</p>
  <p>Política y Privacidad</p>
  <p>Vacantes</p>
  <p>Catálogo Hobba</p>
  <hr>
  <p style="display: block;height: 5px;font-size: 12px;margin-top: 10px;margin-bottom: 0 !important;">©LUFantasie |
    Todos los derechos reservados a sus respectivos dueños | 2014 - 2020</p>
  <p style="display: block;height: 5px;font-size: 12px;margin-bottom: 0 !important;">Design by Assam | Programmed by
    Kakashi</p>
</footer>

<div class="modal fade" id="data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
  integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="js/owl.carousel.js"></script>
<!-- SCRIPT -->
<script>
  $(".owl-one").owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    autoplayTimeout: 1000,
    navElement: false,
    autoplayHoverPause: true,
    autoplay: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
</script>
<script src="/"></script>
<script>
  $(".owl-two").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    navElement: false,
    autoplay: true,
    responsive: {
      0: {
        items: 3,
      },
      600: {
        items: 2,
      },
      480: {
        items: 4,
      },

      768: {
        items: 7,
      },

      800: {
        items: 8,
      },
      1000: {
        items: 15,
      },
    },
  });
  

  $(document).ready(function () {
	  $('[data-toggle="popover"]').popover();
    $(".btn-x").click(function() {
      // $.ajax({
      //   type: "POST",
      //   url: "peticiones/eventos.php",
      //   data: {id: 1},
      //   success: function(data){
      //     alert("Ha sido ejecutada la acción.");
      //     console.log(data);
      //   }
      // });
    }
  });
</script>

<!-- clock widget start -->
<!-- <script type="text/javascript">
  var css_file = document.createElement("link");
  css_file.setAttribute("rel", "stylesheet");
  css_file.setAttribute("type", "text/css");
  css_file.setAttribute(
    "href",
    "//s.bookcdn.com//css/cl/bw-cl-120x45.css"
  );  
  document.getElementsByTagName("head")[0].appendChild(css_file);
</script>

<script type="text/javascript">
  function setWidgetData_134460738(data) {
    if (typeof data != "undefined" && data.results.length > 0) {
      for (var i = 0; i < data.results.length; ++i) {
        var objMainBlock = "";
        var params = data.results[i];
        objMainBlock = document.getElementById(
          "tw_" + params.widget_type + "_" + params.widget_id
        );
        if (objMainBlock !== null) {
          objMainBlock.innerHTML = params.html_code;
        }
      }
    }
  }
  var clock_timer_134460738 = -1;
</script> -->
<!-- END SCRIPT -->

<script>
let x = "0dd";
  $(document).ready(function () {
    console.log(x);
    $(".btn-x").click(function() {
      console.log("uno");
      // $.ajax({
      //   type: "POST",
      //   url: "peticiones/eventos.php",
      //   data: {id: 1},
      //   success: function(data){
      //     alert("Ha sido ejecutada la acción.");
      //     console.log(data);
      //   }
      // });
    }
  });
</script>
</body>

</html>