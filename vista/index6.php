
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PROMO UPSA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<style>
.button {
  background-color: #FFBF00; /* Green */
  border: none;
  color: white;
  font-weight: bold;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;
}
.padre {
  margin: 1rem;
  padding: 1rem;
  border: 2px ;
  /* IMPORTANTE */
  text-align: center;
}

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 40px;}
.button5 {border-radius: 50%;}
.p{
	color:red;
	font-weight:bold;
	font-size: 9px;
}
.p2 {border-radius: 50%;}

</style>
	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">
				<img src="images/logo.png" alt="">
			</div>
            <form action="/promoupsa1/vista/index6.php" method="POST">
            	<div class="form-header">
            		<a href="#">#Promo UPSA cuestionario online</a>
            		<h3 align="center">Lista de los mejores Promedios</h3>
            	</div>
            	<div id="wizard">
	                <h4></h4>
	                <section>
						<h3 align="center">Promedios</h3>
						<div class="form-holder">
							Ingrese la cantidad de mejores promedios que quiere ver: <br><br>
	                    		<input type="number" name="cant" max-length="3" placeholder="" pattern="[123456789]" class="form-control" required>
	                    	</div>
						<div class="padre"> <button class="button button4 " name="btn_prom">Ver Promedios</button> </div>
						<div class="padre"> <button class="button button4 " name="btn_salir">Salir</button> </div>
				
						
						<?php
						if(isset($_POST['btn_prom']))
						{
						
						
						require_once __DIR__.'/../modelo/Examen1Modelo.php';
						$Obj = new Examen1Modelo();
						$rows1 = $Obj->obtenerTopPromedio($_POST['cant']);
						while( $fila1 = $rows1->fetch_row()){ //almacena los datos de grupo y promedio de la cantidad que ponga el usuario.

echo "								<div class=\"form-row\">\n";
echo "	                    		<label for=\"\">\n";
echo "	                    		Grupo : ".$fila1[0];
echo "	                    		</label>\n";
echo "	                    		<div class=\"form-holder\">\n";
echo "								Promedio: ".$fila1[1];
echo "	                    		</div>\n";
echo "	                    	</div>  ";
							}
						}
							if(isset($_POST['btn_salir']))
							{
							header("location: /promoupsa1/vista/mainn2.html");
						}

						?>



