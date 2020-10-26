<?php
session_start();

include "inc/connection.php";
include "inc/arrays.php";
include "inc/functions.php";

if(isset($_SESSION['user_id'])) {
	$checkUserBanned_Query = "SELECT baneado FROM usuarios WHERE id = ?";
	$checkUserBanned = $db->prepare($checkUserBanned_Query);

	$checkUserBanned->execute(array($_SESSION['user_id']));
	$bannedColumn = $checkUserBanned->fetch(PDO::FETCH_OBJ);

	$banned = $bannedColumn->baneado;
	if($banned == 1) {
		echo '<script>window.location.href="/logout?logout";</script>';
	}
}
?>


<?php include "inc/head.php"; ?>
<?php include "inc/header.php"; ?>
<?php include "inc/nav.php"; ?>
<?php include "inc/eventos.php"; ?>
<?php include "inc/placas.php"; ?>
<?php include "inc/sidebar.php"; ?>


		<div id="content-right">
											

											<div id="hobba">

											<div id="barra-title">
													<div id="img-title"><img src="https://1.bp.blogspot.com/-KNfZH2uRYKQ/XK0oYpacyqI/AAAAAAABOsg/JvXUkVqmuU8eHE0eOZtjVosY2PiIEqGKQCKgBGAs/s1600/Image%2B524.png"></div>
													<div id="descrip"><p id="des1">Últimas noticias - Hobba Hotel</p>
																		<p id="des2">Toda la información al alcance de tus manos</p></div>
											</div>





												<div style="margin-left: 20px;">
											<div id="noticia-ch">

													  <div id="noticia-img" style="background-image:url(https://images.habbo.com/habbo-web/america/en/assets/images/app_summary_image-1200x628.85a9f5dc.png)">
													  
													      <div id="noticia-autor">
													        <img src="https://i.imgur.com/j4l9JWJ.png">			   	
													      		</div>	
													  </div>
													  
													  
													  
													  <div id="noticia-texto">
													  	<p style="font-weight:bolder;font-size:14px;">¡Nuevo Moderador en el Hotel!</p>
													    <p style="font-size: 12px;">Entérate sobre el nuevo ascenso</p>


													    <button type="button" class="btn btn-primary" style="float: left;">01/05/2020</button>
													    	<button type="button" class="btn btn-primary" style="float: right;margin-right: 20px;">Ver más</button>
													  
													  </div>
													</div>




														<div id="noticia-ch">

													  <div id="noticia-img" style="background-image:url(https://images.habbo.com/habbo-web/america/en/assets/images/app_summary_image-1200x628.85a9f5dc.png)">
													  
													      <div id="noticia-autor">
													        <img src="https://i.imgur.com/j4l9JWJ.png">			   	
													      		</div>	
													  </div>
													  
													  
													  
													  <div id="noticia-texto">
													  	<p style="font-weight:bolder;font-size:14px;">¡Nuevo Moderador en el Hotel!</p>
													    <p style="font-size: 12px;">Entérate sobre el nuevo ascenso</p>

													    <button type="button" class="btn btn-primary" style="float: left;">01/05/2020</button>
													    	<button type="button" class="btn btn-primary" style="float: right;margin-right: 20px;">Ver más</button>
													  
													  </div>
													</div>




														<div id="noticia-ch">

													  <div id="noticia-img" style="background-image:url(https://images.habbo.com/habbo-web/america/en/assets/images/app_summary_image-1200x628.85a9f5dc.png)">
													  
													      <div id="noticia-autor">
													        <img src="https://i.imgur.com/j4l9JWJ.png">			   	
													      		</div>	
													  </div>
													  
													  
													  
													  <div id="noticia-texto">
													  	<p style="font-weight:bolder;font-size:14px;">¡Nuevo Moderador en el Hotel!</p>
													    <p style="font-size: 12px;">Entérate sobre el nuevo ascenso</p>
													  		
													    	<button type="button" class="btn btn-primary" style="float: left;">01/05/2020</button>
													    	<button type="button" class="btn btn-primary" style="float: right;margin-right: 20px;">Ver más</button>

													  </div>
													</div>
															</div>





										</div>





													<div id="hobba">
												<div id="barra-title">
													<div id="img-title"><img src="http://stag.lufantasie.info/assets/img/pato.png"></div>
													<div id="descrip"><p id="des1">TOP Patos - LUFantasie</p>
																		<p id="des2">Toda la información al alcance de tus manos</p></div>
											</div>
														<div style="margin-left: 20px;">
														<div id="patos">

																<div id="patos-user"><img src="https://www.hobba.tv/habblet/avatarimageByUsername/Kakashi97?size=b&direction=2&head_direction=2&headonly=0&action=std&gesture=std"></div>
															 	 <div id="patos-datos">
															       <p style="height: 10px;margin-top: 10px;font-weight: bolder;">Kakashi</p>
															       <button type="button" class="btn btn-warning">Tiene 10 patos</button>
															  
															  </div></div>



															  <div id="patos">

																<div id="patos-user"><img src="https://www.hobba.tv/habblet/avatarimageByUsername/Kakashi97?size=b&direction=2&head_direction=2&headonly=0&action=std&gesture=std"></div>
															 	 <div id="patos-datos">
															       <p style="height: 10px;margin-top: 10px;font-weight: bolder;">Kakashi</p>
															       <button type="button" class="btn btn-warning">Tiene 10 patos</button>
															  
															  </div></div>



															  <div id="patos">

																<div id="patos-user"><img src="https://www.hobba.tv/habblet/avatarimageByUsername/Kakashi97?size=b&direction=2&head_direction=2&headonly=0&action=std&gesture=std"></div>
															 	 <div id="patos-datos">
															       <p style="height: 10px;margin-top: 10px;font-weight: bolder;">Kakashi</p>
															       <button type="button" class="btn btn-warning">Tiene 10 patos</button>
															  
															  </div></div>



															  <div id="patos">

																<div id="patos-user"><img src="https://www.hobba.tv/habblet/avatarimageByUsername/Kakashi97?size=b&direction=2&head_direction=2&headonly=0&action=std&gesture=std"></div>
															 	 <div id="patos-datos">
															       <p style="height: 10px;margin-top: 10px;font-weight: bolder;">Kakashi</p>
															       <button type="button" class="btn btn-warning">Tiene 10 patos</button>
															  
															  </div></div>

															</div>


										</div>




													<div id="hobba">

													<div id="barra-title">

													<div id="img-title"><img src="https://4.bp.blogspot.com/-ZAhJWtog7dk/XK0oYhr-REI/AAAAAAABOsg/XPCdWA03pcosUsFOPQpoi4n_Okn133RaACKgBGAs/s1600/Image%2B1430.png"></div>
													<div id="descrip"><p id="des1">Puntos Gymkhana - Hobba Hotel</p>
																		<p id="des2">Toda la información al alcance de tus manos</p></div>
											</div>

													<div style="margin-left: 20px;">
														<div id="patos">

																<div id="patos-user"><img src="https://www.hobba.tv/habblet/avatarimageByUsername/Kakashi97?size=b&direction=2&head_direction=2&headonly=0&action=std&gesture=std"></div>
															 	 <div id="patos-datos">
															       <p style="height: 10px;margin-top: 10px;font-weight: bolder;">Kakashi</p>
															       <button type="button" class="btn btn-warning">10 puntos</button>
															  
															  </div></div>



															  <div id="patos">

																<div id="patos-user"><img src="https://www.hobba.tv/habblet/avatarimageByUsername/Kakashi97?size=b&direction=2&head_direction=2&headonly=0&action=std&gesture=std"></div>
															 	 <div id="patos-datos">
															       <p style="height: 10px;margin-top: 10px;font-weight: bolder;">Kakashi</p>
															       <button type="button" class="btn btn-warning">10 puntos</button>
															  
															  </div></div>



															  <div id="patos">

																<div id="patos-user"><img src="https://www.hobba.tv/habblet/avatarimageByUsername/Kakashi97?size=b&direction=2&head_direction=2&headonly=0&action=std&gesture=std"></div>
															 	 <div id="patos-datos">
															       <p style="height: 10px;margin-top: 10px;font-weight: bolder;">Kakashi</p>
															       <button type="button" class="btn btn-warning">10 puntos</button>
															  
															  </div></div>



															  <div id="patos">

																<div id="patos-user"><img src="https://www.hobba.tv/habblet/avatarimageByUsername/Kakashi97?size=b&direction=2&head_direction=2&headonly=0&action=std&gesture=std"></div>
															 	 <div id="patos-datos">
															       <p style="height: 10px;margin-top: 10px;font-weight: bolder;">Kakashi</p>
															       <button type="button" class="btn btn-warning">10 puntos</button>
															  
															  </div></div>

															</div>


										</div>





												<div id="hobba">

											<div id="barra-title">
													<div id="img-title"><img src="https://1.bp.blogspot.com/-KNfZH2uRYKQ/XK0oYpacyqI/AAAAAAABOsg/JvXUkVqmuU8eHE0eOZtjVosY2PiIEqGKQCKgBGAs/s1600/Image%2B524.png"></div>
													<div id="descrip"><p id="des1">Últimos movimientos en el Hotel del Mes</p>
																		<p id="des2">¡Ascensos, dimisiones, expulsiones!</p></div>
											</div>

													<div style="margin-left: 20px;">
														
														<div id="movimientos"><img src="http://lufantasie.info/imagenes/furnis_nuevos/fca36c4657.png"></div>

														<div id="movimientos"><img src="http://lufantasie.info/imagenes/furnis_nuevos/fca36c4657.png"></div>
														<div id="movimientos"><img src="http://lufantasie.info/imagenes/furnis_nuevos/fca36c4657.png"></div>
														<div id="movimientos"><img src="http://lufantasie.info/imagenes/furnis_nuevos/fca36c4657.png"></div>
														<div id="movimientos"><img src="http://lufantasie.info/imagenes/furnis_nuevos/fca36c4657.png"></div>
														<div id="movimientos"><img src="http://lufantasie.info/imagenes/furnis_nuevos/fca36c4657.png"></div>
														<div id="movimientos"><img src="http://lufantasie.info/imagenes/furnis_nuevos/fca36c4657.png"></div>
														<div id="movimientos"><img src="http://lufantasie.info/imagenes/furnis_nuevos/fca36c4657.png"></div>
														<div id="movimientos"><img src="http://lufantasie.info/imagenes/furnis_nuevos/fca36c4657.png"></div>
														<div id="movimientos"><img src="http://lufantasie.info/imagenes/furnis_nuevos/fca36c4657.png"></div>




													</div>

													</div>
										</div>



											


						</div>

<?php include "inc/footer.php"; ?>
