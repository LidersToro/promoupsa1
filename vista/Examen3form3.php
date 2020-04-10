<?php
session_start();
$a="";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PROMO UPSA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
		
		
		<script type="text/javascript">
		
		function cambiar() {
		  
			var imagen = document.getElementById('imagen1');
			var select = document.getElementById('resp1');
			var imagenn = document.getElementById('imagen2');
			
			select.value="a";
			const value = select.value;
			let option = select.querySelector(`option[value="b"]`);
			option.disabled = true;
			imagen.src = "/../promoupsa1/images/video1.gif";
			imagenn.src = "";
			
			

			}
			function cambiar1() {
			
			var imagen = document.getElementById('imagen1');
			var select = document.getElementById('resp1');
			var imagenn = document.getElementById('imagen2');
			select.value="b";
			const value = select.value;
			let option = select.querySelector(`option[value="a"]`);
			option.disabled = true;
			imagen.src = "";
			imagenn.src = "/../promoupsa1/images/video2.gif";
			
			$a=2;
			}
		</script>



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

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 40px;}
.button5 {border-radius: 50%;}
.p{
	color:red;
	font-weight:bold;
	font-size: 13px;
}
.padre {
  margin: 1rem;
  padding: 1rem;
  border: 2px ;
  /* IMPORTANTE */
  text-align: center;
}
.p2 {border-radius: 50%;}

</style>

	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">
				<img src="images/logo.png" alt="">
			</div>
            <form action="../controlador/Examen3Controlador.php" method="POST">
			<br><br><br><br><br><br><br><br><br><br>
            	<div class="form-header">
            		<a href="#">#Promo UPSA cuestionario online</a>
            		<h3>Carrera de Ingenieria Civil</h3>
					<h3>Nombre del Grupo : <?php echo $_SESSION['grupo'];?> </h3>
            	</div>
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
	                     <h3 class="padre">Cuál de los siguientes puentes tiene mejor Resistencia</h3>
						 Haga click en la imagen que crea que es más resistente<br><br>
					<img src="/../promoupsa1/images/corecto.jpeg" onclick="cambiar();" id="imagen1" >
						<br><br><br>
					<img src="/../promoupsa1/images/mal.jpeg"  onclick="cambiar1();" id="imagen2" >


					<select name="resp1" id="resp1" class="form-control" Required>	
					<option value="a" class="option">A</option>
					<option value="b" class="option">B</option>	
					</select> 
					
					
	                </section>
					<!-- SECTION 2 -->
	                <h4></h4>
					<section>
	                <h3 class="padre">Ana le dice a Hugo. Si me das una manzana tendré el doble de las tuyas. Hugo le responde. Si me das una de las tuyas los 2 tendremos la misma cantidad. ¿Cuántas manzanas tiene Hugo?</h3>
					Sea x: # de manzanas de Ana <br>
					Sea y: # de manzanas de Hugo<br>
							<br><br>
					Solo colocar el número.<br>
	                x)<input type="number" name="resp2" class="form-control" Required>	
					y)<input type="number" name="resp3" class="form-control" Required>	
	                
	                    
	                </section>

	                <!-- SECTION 3 -->
	                <h4></h4>
	                <section>
	                    <h3 class="padre"> Se deja caer un objeto desde la azotea de un edificio que tiene una altura de 12 m. ¿En qué tiempo toca el piso?</h3>
					<div class="padre">
					<img src="/../promoupsa1/images/civil3.png" ><br>
						En la ecuación<br>
					<img src="/../promoupsa1/images/civil4.png" >
					</div>
					<br><br>
					Colocar el tiempo en segundos, usar solo dos decimales y utilizar el punto decimal.<br>
	                <input type="text" name="resp4" class="form-control" Required>	
					<br><br>
	                
						<div class="padre">
						<p class="p p2">Si el boton no le da, fata llenar algun dato en el formulario. </p>
						<button class="button button4" name="btn_enviar">Finalizar Cuestionario</button>
						</div>
	                </section>

            	</div>

            </form>

		</div>
		

		<script src="js/jquery-3.3.1.min.js"></script>
		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>
		<script src="js/main.js"></script>
</body>
</html>
