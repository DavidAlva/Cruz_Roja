<!DOCTYPE html>
<html lang="es" >
    <head>
        <meta charset="utf-8" />
        <title>Cruz Roja Mexicana</title>
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
        <link href="css/contenedor_center.css" rel="stylesheet" type="text/css" />
        <link href="css/tabla.css" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple|3d" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>

        <script src="http://code.jquery.com/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="java/dev/jquery.jsCarousel-1.1.1.js" type="text/javascript"></script>      
        <script src="java/sample.js" type="text/javascript"></script>
    </head>
    <body>

        <div id="pagina">

        	    <header>
	        		<img id="logo" src="imagenes/logo.jpg">
		        	<div id="cabecera">Yo estoy ayudando. &#161;T&uacute; tambi&eacute;n puedes&#33;</div>
		        	<img id="celaya" src="imagenes/Celaya.jpg">
			</header>
     		<?php include('header.php');?>

	       <div class="container">
				<center><p><h1>Cruz Roja Mexicana Delegacion Celaya</h1></p></center>

				<br>
				<p><h2> Misi&oacuten </h2></p>
				<hr>

				<p>
				Ofrecer atención eficiente a la población en casos de emergencia y en situaciones de desastre, e impulsar acciones tendientes a incrementar la capacidad de las personas y las comunidades a través de la acción voluntaria.
				</p>
				<br>
							<div id="carrussel">
                                        <script type="text/javascript">
										    jQuery(document).ready(function ()
										    {
										        jQuery('#carrusel').jsCarousel({
										            autoStart: true
										            , direction: 1
										            , effect: 'fade'
										            , interval: 4000
										            , effectDuration: 1400
										            , width: 800
										            , height: 300
										        });
													    });
										</script>
													 
													<ul id="carrusel">
													    <li><a data-image="imagenes/cruzroja.png" title="Bienvenidos">First link</a></li>
													    <li><a data-image="imagenes/cruzroja2.png" title="Bienvenidos">The link number 2</a></li>
													    <li><a data-image="imagenes/cruzroja3.png" title="Bienvenidos">This is the third link</a></li>
													</ul>
							</div>
							<br>
							<br>
				
				<p><h3> Tu puedes apoyar aportando en la siguiente cuenta: </h3></p>
				<hr>
				<br>
				<table cellspacing="0">
					<tr><th>CRUZ ROJA MEXICANA</th> <th></th></tr>
					<tr><td>BANCO</td> <td>BANCOMER</td></tr>
					<tr  id="tr_w"><td>SUCURSAL</td> <td>302</td></tr>
					<tr><td>CUENTA NO.</td> <td>0481194836</td></tr>
					<tr id="tr_w"><td>CUENTA CLAVE</td> <td>012215004811948363</td></tr>
				</table>
				<br>
				<br>
				<br>
<br>
				<br>
				<br>
<br>
				<br>
				<br>
<br>
				<br>
				<br>

				<hr>

				<p>Se agradece a las respectivas areas de Cruz Roja local, nacional e internacional por sus aportaciones para conformar este portal, El contenido intelectual de este sitio y sus archivos esta  restringido, su copia, reproduccion y retransmission esta prohibida.Copyright ©2007-2010 Cruz Roja Mexicana Delegacion Celaya</p>
	       </div>
        	
        </div>

    </body>

</html>