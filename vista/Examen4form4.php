<?php
session_start();
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
            <form action="../controlador/Examen4Controlador.php" method="POST">
			<br><br><br><br><br><br><br>
            	<div class="form-header">
            		<a href="#">#Promo UPSA cuestionario online</a>
            		<h3>Carrera de Ingenieria Industrial y de Sistema </h3>
					<h3>Nombre del Grupo : <?php echo $_SESSION['grupo'];?> </h3>
            	</div>
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
					<div class="padre">Ordena los elementos característicos de cada revolución industrial con la tecnología característica de ellas.</div>
	                    <div class="form-row" style="margin-bottom: 26px;">
	                    	<label >
	                    		Electricidad <select name="resp1" class="form-control" required>
									<option value="" selected disabled>Selecione uno</option>
									<option value="a" class="option">a</option>
									<option value="b" class="option">b</option>
									<option value="c" class="option">c</option>
									<option value="d" class="option">d</option>
								</select><br>
	                    		<img src="/../promoupsa1/images/indu1.png" >
	                    	</label>
							<label >
	                    	Electronica  <select name="resp2" class="form-control" required>
									<option value="" selected disabled>Selecione uno/option>
									<option value="a" class="option">a</option>
									<option value="b" class="option">b</option>
									<option value="c" class="option">c</option>
									<option value="d" class="option">d</option>
								</select><br>
	                    		<img src="/../promoupsa1/images/indu3.png" >
							</label>
							<div class="form-holder">
	                    		A)	Industria 1.0 <br><br>
								B)	Industria 2.0 <br><br>
								
	                    	</div>
	                    	
	                    </div>	
						<div class="form-row" style="margin-bottom: 26px;">
	                    	<label >
	                    	Vapor  <select name="resp3" class="form-control" required>
									<option value="" selected disabled>Selecione uno</option>
									<option value="a" class="option">a</option>
									<option value="b" class="option">b</option>
									<option value="c" class="option">c</option>
									<option value="d" class="option">d</option>
								</select><br>
	                    		<img src="/../promoupsa1/images/indu2.png" >
								</label>
								<label >
	                    	Internet  <select name="resp4" class="form-control" required>
									<option value="" selected disabled>Selecione uno</option>
									<option value="a" class="option">a</option>
									<option value="b" class="option">b</option>
									<option value="c" class="option">c</option>
									<option value="d" class="option">d</option>
								</select><br>
	                    		<img src="/../promoupsa1/images/indu4.png" >
								</label>
							<div class="form-holder">
	                    		C)	Industria 3.0 <br><br>
								D)	Industria 4.0 <br><br>
								
	                    	</div>	
	                    </div>	
		
	                    
	                </section>
	                
					<!-- SECTION 2 -->
	                <h4></h4>
	                <section>
	                    <div class="padre">El siguiente gráfico de barras representa la distribución de la resistencia de piezas de madera producidas en un una carpintería industrial. El cliente ha establecido que la resistencia de cada pieza debe estar entre 15- 20 libras por cm2.  ¿Qué se puede decir respecto a la capacidad el proceso de cumplir o no con las especificaciones dadas por el cliente?</div>
					<br>
					<img src="/../promoupsa1/images/indu5.png" ><br><br>
					
					
					<label>
	                ¿ La carpintería sería capaz de cumplir con las especificaciones?  
					</label>
					<br><br>
					<input type="radio" name="resp5" value="a"/>Si<input type="radio" name="resp5" value="b"/> No	<br><br>
				
					  ¿Cuál parece ser la resistencia promedio de las piezas? 
					</label>
					<br><br>
					<input type="radio" name="resp6" value="a"/>16 a 16.5 lbs por cm2<input type="radio" name="resp6" value="b"/> 19.5 a 20.0 lbs por cm2<br><input type="radio" name="resp6" value="c"/>18 a 18.5 lbs por cm2			
				
	                </section>

	                <!-- SECTION 3 -->
	                <h4></h4>
	                <section>
	                            <div > Una empresa zapatera encontró en su última auditoría las siguientes quejas: <br>
								a) No se atendió a una queja de un cliente   <br>
								b) Se demoró mucho la entrega<br>
								Selecciona los aspectos que pudieron causar estas no conformidades (quejas)<br>
								1.  Falta de Supervisión <br>
								2.  Evaluación de proveedores<br>
								3.  Falta de Enfoque al cliente<br>
								4.  Falta de procedimientos  <br>
								5.  Capacidad de entrega<br>
								6.  Falta de liderazgo <br>
							</div>
					<label>
	                Selecione uno 
					</label>
					<br><br>
									<input type="radio" name="resp7" value="a"/>1, 2, 3
									<input type="radio" name="resp7" value="b"/>1, 4, 6
									<input type="radio" name="resp7" value="c"/>1, 3, 4
									<input type="radio" name="resp7" value="d"/>3, 5, 6
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
