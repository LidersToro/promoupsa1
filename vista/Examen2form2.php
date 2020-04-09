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
            <form action="../controlador/Examen2Controlador.php" method="POST">
            	<div class="form-header">
            		<a href="#">#Promo UPSA cuestionario online</a>
            		<h3>Carrera de Ingenieria Informática y/o de Sistemas</h3>
					<h3>Nombre del Grupo : <?php echo $_SESSION['grupo'];?> </h3>
            	</div>
				<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
					<h3 class="padre">Descifrar el Siguiente Mensaje</h3>
					<img src="/../promoupsa1/images/printext.png" >
					<img src="/../promoupsa1/images/sectext.png" >

					<label for="">
	                    		Escribir el codigo con todo hasta con las comas y en mayusculas:
	                </label>
	                <input type="text" class="form-control">
	                    
					
	                </section>
					<!-- SECTION 2 -->
					
	                <h4></h4>
	                <section>
					    <h3 class="padre">Realizar el Sudoku</h3>
					<div class="padre">
	                   <div style="width: 450px;">
						 <iframe name="sudokuWindow2" src="https://onlinesudoku.es/sudokulib/generate.php?size=medium" width="250" height="320" frameBorder="0" scrolling="no">
						 </iframe>
						  <div style="text-align: right; width: 240px;">
						   <a href="https://onlinesudoku.es/" style="color: #FFBF00;" title="Sudoku Online - El juego del Sudoku">Online<strong>Sudoku</strong><span>.es</span></a>
						  </div>
						</div>
						</div>
						
	                    	<label for="">
	                    		tiene que darle a "Haz el control" en la parte superior para verificar su respuesta para verificar su respuesta, si todos los cuadros estan en blanco usted debe de poner en esta opcion 
								si, caso contrario si no llego a completar el sudoku tiene que poner no.
	                    	</label>
	                    
	                    		<select name="resp7" class="form-control">
									<option value="" selected disabled>Seleciona uno opcion</option>
									<option value="a" class="option">Si</option>
									<option value="b" class="option">No</option>
								</select>
	                   
	                </section>

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
