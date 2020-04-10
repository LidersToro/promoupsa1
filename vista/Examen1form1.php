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
            <form action="../controlador/Examen1Controlador.php" method="POST">
			<br><br><br><br><br><br><br><br><br><br>
            	<div class="form-header">
            		<a href="#">#Promo UPSA cuestionario online</a>
            		<h3>Carrera de Ingenieria Electronica</h3>
					<h3>Nombre del Grupo : <?php echo $_SESSION['grupo'];?> </h3>
            	</div>
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
	                    <h3 class="padre">Dado el siguiente Circuito</h3>
					<img src="/../promoupsa1/images/pregun1elec.png" >
					
					<label>
	                Con sus valores:
					R1=3Ω &nbsp;&nbsp;R2=2Ω &nbsp;&nbsp;R3=4Ω &nbsp;&nbsp;R4=3Ω &nbsp;&nbsp;R5=4Ω &nbsp;&nbsp;R6=8Ω &nbsp;&nbsp;R7=1Ω &nbsp;&nbsp;R8=6Ω &nbsp;&nbsp;R9=10Ω &nbsp;&nbsp;R10=3Ω &nbsp;&nbsp;R11=7Ω &nbsp;&nbsp;R12=8Ω &nbsp;&nbsp;y &nbsp;&nbsp;V=220v  <br>
					<br>
					a) Calcular la resistencia total<br>
					b) Encontrar la intensidad de corriente<br>
					c) Encontrar la potencia 
					</label>
					<br><br>
					Solo colocar el número, sin su unidad de medida.<br>
	                a)<input type="text" name="a1" class="form-control">	
					b)<input type="text" name="b1" class="form-control">	
					c)<input type="text" name="c1" class="form-control">	
	                </section>
	                
					<!-- SECTION 2 -->
	                <h4></h4>
	                <section>
					   <h3 class="padre">Crear la función y la tabla de verdad</h3>
					<img src="/../promoupsa1/images/pregun2elec.png" >
	              
					Solo colocar el número, sin su unidad de medida.<br>
	                Escribir la función <input type="number" name="a" class="form-control">	
					Escribir la tabla de verdad<<input type="number" name="b" class="form-control">	
					
	                </Section>

	                <!-- SECTION 3 -->
	                <h4></h4>
	                <section>
	                    <div class="form-row">
	                    	<label for="">
	                    		Course ID:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" placeholder="Ex. abc 12345 or abc 1234L">
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label for="">
	                    		Course Title:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" placeholder="Ex. Intro to physic">
	                    	</div>
	                    </div>	
                     	<div class="form-row">
	                    	<label for="">
	                    		Section(s):
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" placeholder="Ex. 3679 or 33fa, 4295">
	                    	</div>
	                    </div>	
	                    <div class="form-row" style="margin-bottom: 38px">
	                    	<label for="">
	                    		Select Teacher:
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="" id="" class="form-control">
	                    			<option value="frances meyer" class="option">Frances Meyer</option>
									<option value="johan lucas" class="option">Johan Lucas</option>
									<option value="merry linn" class="option">Merry Linn</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	
	                    <div class="checkbox-circle" style="margin-bottom: 48px;">
							<label>
								<input type="checkbox" checked>I agree all statement in Terms & Conditions
								<span class="checkmark"></span>
							</label>
						</div>
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
