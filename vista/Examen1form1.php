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
					
					a) Calcular la resistencia total<br>
					b) Encontrar la intensidad de corriente<br>
					c) Encontrar la potencia 
					</label>
					<br>
					<b>Solo colocar el número, sin su unidad de medida.<br></b>
	                a)<input type="text" name="a1" class="form-control">	
					b)<input type="text" name="b1" class="form-control">	
					c)<input type="text" name="c1" class="form-control">	
	                </section>
	                
					<!-- SECTION 2 -->
	                <h4></h4>
	                <section>
					   <h3 class="padre">Crear la función y la tabla de verdad</h3>
					<img src="/../promoupsa1/images/pregun2elec.png" >
	              
					<br>
	                <b>Cual es la función?</b><br> 					
					<select name="resp9" id="resp9" class="form-control" Required>	
					<option value="a" class="option">F(A,B,C)= A+B'+C+[(A*B*C)'+(A+B+C)']</option>
					<option value="b" class="option">F(A,B,C)= A'+B'+C'+[(A*B*C)'*(A'+B+C')']</option> <!--Esta es la respuesta correcta-->
					<option value="c" class="option">F(A,B,C)= A'+B'+C'+[(A+B+C)'+(A'+B+C')]</option>
					</select>  <br><br>
					<img src="/../promoupsa1/images/elec1.png" >
					<br>
					<b>Cual es la función?</b>
						<br>
						<select name="resp10" id="resp10" class="form-control" Required>	
					<option value="a" class="option">F(A,B,C)= A+B'+C+[(A+B+C)+(A*B*C)]</option>
					<option value="b" class="option">F(A,B,C)= (A'+B')*(B+C')</option> 
					<option value="c" class="option">F(A,B,C)= (A+B)*(B'+C)</option> <!--Esta es la respuesta correcta-->
					</select> 
	                </Section>

	                <!-- SECTION 3 -->
	                <h4></h4>
	                <section>
						<h3 class="padre">Cual es la tabla para la siguiente funcion: <br>F(A,B,C)= (A+B')*C</h3>
	                    <input type="radio" name="tverdad" checked="checked" value="a"/> <img src="/../promoupsa1/images/elec2.png" width="250" height="250"> <br>
						
						<br><input type="radio" name="tverdad" value="b"/> <img src="/../promoupsa1/images/elec3.png" width="250" height="250" >
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
