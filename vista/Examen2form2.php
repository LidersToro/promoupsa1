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
        <script type="text/javascript">
            function verificar() {
                var select = document.getElementById('resp7');
                var t2 = document.getElementById('cell-2');
                var t5 = document.getElementById('cell-5');
                var t7 = document.getElementById('cell-7');
                var t9 = document.getElementById('cell-9');
                var t10 = document.getElementById('cell-10');
                var t11 = document.getElementById('cell-11');
                var t12 = document.getElementById('cell-12');
                var t13 = document.getElementById('cell-13');
                var t15 = document.getElementById('cell-15');
                var t16 = document.getElementById('cell-16');
                var t17 = document.getElementById('cell-17');
                var t18 = document.getElementById('cell-18');
                var t19 = document.getElementById('cell-19');
                var t20 = document.getElementById('cell-20');
                var t21 = document.getElementById('cell-21');
                var t22 = document.getElementById('cell-22');
                var t24 = document.getElementById('cell-24');
                var t29 = document.getElementById('cell-29');
                var t30 = document.getElementById('cell-30');
                var t31 = document.getElementById('cell-31');
                var t32 = document.getElementById('cell-32');
                var t34 = document.getElementById('cell-34');
                var t36 = document.getElementById('cell-36');
                var t37 = document.getElementById('cell-37');
                var t39 = document.getElementById('cell-39');
                var t40 = document.getElementById('cell-40');
                var t41 = document.getElementById('cell-41');
                var t43 = document.getElementById('cell-43');
                var t44 = document.getElementById('cell-44');
                var t46 = document.getElementById('cell-46');
                var t48 = document.getElementById('cell-48');
                var t49 = document.getElementById('cell-49');
                var t50 = document.getElementById('cell-50');
                var t51 = document.getElementById('cell-51');
                var t56 = document.getElementById('cell-56');
                var t58 = document.getElementById('cell-58');
                var t59 = document.getElementById('cell-59');
                var t60 = document.getElementById('cell-60');
                var t61 = document.getElementById('cell-61');
                var t62 = document.getElementById('cell-62');
                var t63 = document.getElementById('cell-63');
                var t64 = document.getElementById('cell-64');
                var t65 = document.getElementById('cell-65');
                var t67 = document.getElementById('cell-67');
                var t68 = document.getElementById('cell-68');
                var t69 = document.getElementById('cell-69');
                var t70 = document.getElementById('cell-70');
                var t71 = document.getElementById('cell-71');
                var t73 = document.getElementById('cell-73');
                var t75 = document.getElementById('cell-75');
                var t78 = document.getElementById('cell-78');
                if (t2 == '7' && t5 == '8' && t7 == '4' && t9 == '4' && t10 == '9' && t11 == '3' && t12 == '6' && t13 == '7' && t15 == '5' && t16 == '1' && t17 == '8' && t18 == '5' && t19 == '8' && t20 == '2' && t21 == '4' && t22 == '9' && t24 == '3' && t29 == '8' && t30 == '9' && t31 == '5' && t32 == '6' && t34 == '2' && t36 == '2' && t37 == '7' && t39 == '3' && t40 == '1' && t41 == '4' && t43 == '5' && t44 == '6' && t46 == '5' && t48 == '8' && t49 == '2' && t50 == '7' && t51 == '1' && t56 == '6' && t58 == '4' && t59 == '3' && t60 == '9' && t61 == '7' && t62 == '5' && t63 == '7' && t64 == '4' && t65 == '5' && t67 == '8' && t68 == '9' && t69 == '6' && t70 == '3' && t71 == '1' && t73 == '3' && t75 == '7' && t78 == '4') {
                    select.value = "1";
                    const value = select.value;
                    let option = select.querySelector(`option[value="1"]`);
                    option.disabled = true;
                }
                else {
                    select.value = "0";
                        const value = select.value;
                    let option = select.querySelector(`option[value="0"]`);
                    option.disabled = true;
                }
            
           // select.value="a";
			//const value = select.value;
			//let option = select.querySelector(`option[value="b"]`);
			//option.disabled = true;
			//imagen.src = "/../promoupsa1/images/video1.gif";
            //imagenn.src = "";
            

            }
            </script>


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
	                    		Escribir el codigo con todo hasta con las comas y espacios:
	                </label>
	            
	                    <input type="text" name ="t1" class="form-control" onkeyup="this.value = this.value.toUpperCase(); " required>
					
	                </section>
					<!-- SECTION 2 -->
					
	                <h4></h4>
	                <section>
					    <h3 class="padre">Realizar el Sudoku</h3>
					<div class="padre">
	                   <div style="width: 450px;">

						  <div style="text-align: right; width: 240px;">
						  <style type="text/css">
							  table {
        border: 2px solid #000000;
      }

      td {
        border: 1px solid #000000;
        text-align: center;
        vertical-align: middle;
      }

      input {
        color: #000000;
        padding: 0;
        border: 0;
        text-align: center;
        width: 48px;
        height: 48px;
        font-size: 24px;
        background-color: #FFFFFF;
        outline: none;
      }

      input:disabled {
        background-color: #EEEEEE;
      }

      #cell-0,  #cell-1,  #cell-2  { border-top:    2px solid #000000; }
      #cell-2,  #cell-11, #cell-20 { border-right:  2px solid #000000; }
      #cell-18, #cell-19, #cell-20 { border-bottom: 2px solid #000000; }
      #cell-0,  #cell-9,  #cell-18 { border-left:   2px solid #000000; }

      #cell-3,  #cell-4,  #cell-5  { border-top:    2px solid #000000; }
      #cell-5,  #cell-14, #cell-23 { border-right:  2px solid #000000; }
      #cell-21, #cell-22, #cell-23 { border-bottom: 2px solid #000000; }
      #cell-3,  #cell-12, #cell-21 { border-left:   2px solid #000000; }

      #cell-6,  #cell-7,  #cell-8  { border-top:    2px solid #000000; }
      #cell-8,  #cell-17, #cell-26 { border-right:  2px solid #000000; }
      #cell-24, #cell-25, #cell-26 { border-bottom: 2px solid #000000; }
      #cell-6,  #cell-15, #cell-24 { border-left:   2px solid #000000; }

      #cell-27, #cell-28, #cell-29 { border-top:    2px solid #000000; }
      #cell-29, #cell-38, #cell-47 { border-right:  2px solid #000000; }
      #cell-45, #cell-46, #cell-47 { border-bottom: 2px solid #000000; }
      #cell-27, #cell-36, #cell-45 { border-left:   2px solid #000000; }

      #cell-30, #cell-31, #cell-32 { border-top:    2px solid #000000; }
      #cell-32, #cell-41, #cell-50 { border-right:  2px solid #000000; }
      #cell-48, #cell-49, #cell-50 { border-bottom: 2px solid #000000; }
      #cell-30, #cell-39, #cell-48 { border-left:   2px solid #000000; }

      #cell-33, #cell-34, #cell-35 { border-top:    2px solid #000000; }
      #cell-35, #cell-44, #cell-53 { border-right:  2px solid #000000; }
      #cell-51, #cell-52, #cell-53 { border-bottom: 2px solid #000000; }
      #cell-33, #cell-42, #cell-51 { border-left:   2px solid #000000; }

      #cell-54, #cell-55, #cell-56 { border-top:    2px solid #000000; }
      #cell-56, #cell-65, #cell-74 { border-right:  2px solid #000000; }
      #cell-72, #cell-73, #cell-74 { border-bottom: 2px solid #000000; }
      #cell-54, #cell-63, #cell-72 { border-left:   2px solid #000000; }

      #cell-57, #cell-58, #cell-59 { border-top:    2px solid #000000; }
      #cell-59, #cell-68, #cell-77 { border-right:  2px solid #000000; }
      #cell-75, #cell-76, #cell-77 { border-bottom: 2px solid #000000; }
      #cell-57, #cell-66, #cell-75 { border-left:   2px solid #000000; }

      #cell-60, #cell-61, #cell-62 { border-top:    2px solid #000000; }
      #cell-62, #cell-71, #cell-80 { border-right:  2px solid #000000; }
      #cell-78, #cell-79, #cell-80 { border-bottom: 2px solid #000000; }
      #cell-60, #cell-69, #cell-78 { border-left:   2px solid #000000; }

    </style>
 <div class="container">
<center><table id="grid">

        <tr>
          <td><input id="cell-0" name="cell-0" type="text" value="1" disabled></td>
          <td><input id="cell-1" name="cell-1" type="text" value="6" disabled></td>
          <td><input id="cell-2" name="cell-2" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>

          <td><input id="cell-3" name="cell-3" type="text" value="5" disabled></td>
          <td><input id="cell-4" name="cell-4" type="text" value="3" disabled></td>
          <td><input id="cell-5" name="cell-5" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>

          <td><input id="cell-6" name="cell-6" type="text" value="2" disabled></td>
          <td><input id="cell-7" name="cell-7" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-8" name="cell-8" type="text" value="9" disabled></td>
        </tr>

        <tr>
          <td><input id="cell-9" name="cell-9" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-10" name="cell-10" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-11" name="cell-11" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>

          <td><input id="cell-12" name="cell-12" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-13" name="cell-13" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-14" name="cell-14" type="text" value="2" disabled></td>

          <td><input id="cell-15" name="cell-15" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-16" name="cell-16" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-17" name="cell-17" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
        </tr>

        <tr>
          <td><input id="cell-18" name="cell-18" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-19" name="cell-19" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-20" name="cell-20" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>

          <td><input id="cell-21" name="cell-21" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-22" name="cell-22" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-23" name="cell-23" type="text" value="1" disabled></td>

          <td><input id="cell-24" name="cell-24" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-25" name="cell-25" type="text" value="6" disabled></td>
          <td><input id="cell-26" name="cell-26" type="text" value="7" disabled></td>
        </tr>

        <tr>
          <td><input id="cell-27" name="cell-27" type="text" value="3" disabled></td>
          <td><input id="cell-28" name="cell-28" type="text" value="1" disabled></td>
          <td><input id="cell-29" name="cell-29" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>

          <td><input id="cell-30" name="cell-30" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-31" name="cell-31" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-32" name="cell-32" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>

          <td><input id="cell-33" name="cell-33" type="text" value="7" disabled></td>
          <td><input id="cell-34" name="cell-34" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-35" name="cell-35" type="text" value="4" disabled></td>
        </tr>

        <tr>
          <td><input id="cell-36" name="cell-36" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-37" name="cell-37" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-38" name="cell-38" type="text" value="9" disabled></td>

          <td><input id="cell-39" name="cell-39" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-40" name="cell-40" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-41" name="cell-41" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>

          <td><input id="cell-42" name="cell-42" type="text" value="8" disabled></td>
          <td><input id="cell-43" name="cell-43" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-44" name="cell-44" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
        </tr>

        <tr>
          <td><input id="cell-45" name="cell-45" type="text" value="6" disabled></td>
          <td><input id="cell-46" name="cell-46" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-47" name="cell-47" type="text" value="4" disabled></td>

          <td><input id="cell-48" name="cell-48" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-49" name="cell-49" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-50" name="cell-50" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>

          <td><input id="cell-51" name="cell-51" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-52" name="cell-52" type="text" value="9" disabled></td>
          <td><input id="cell-53" name="cell-53" type="text" value="3" disabled></td>
        </tr>

        <tr>
          <td><input id="cell-54" name="cell-54" type="text" value="8" disabled></td>
          <td><input id="cell-55" name="cell-55" type="text" value="2" disabled></td>
          <td><input id="cell-56" name="cell-56" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>

          <td><input id="cell-57" name="cell-57" type="text" value="1" disabled></td>
          <td><input id="cell-58" name="cell-58" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-59" name="cell-59" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>

          <td><input id="cell-60" name="cell-60" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-61" name="cell-61" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-62" name="cell-62" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
        </tr>

        <tr>
          <td><input id="cell-63" name="cell-63" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-64" name="cell-64" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-65" name="cell-65" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>

          <td><input id="cell-66" name="cell-66" type="text" value="2" disabled></td>
          <td><input id="cell-67" name="cell-67" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-68" name="cell-68" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>

          <td><input id="cell-69" name="cell-69" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-70" name="cell-70" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-71" name="cell-71" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
        </tr>

        <tr>
          <td><input id="cell-72" name="cell-72" type="text" value="9" disabled></td>
          <td><input id="cell-73" name="cell-73" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-74" name="cell-74" type="text" value="1" disabled></td>

          <td><input id="cell-75" name="cell-75" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-76" name="cell-76" type="text" value="6" disabled></td>
          <td><input id="cell-77" name="cell-77" type="text" value="5" disabled></td>

          <td><input id="cell-78" name="cell-78" max-length="1" placeholder="" pattern="[123456789]" type="text"></td>
          <td><input id="cell-79" name="cell-79" type="text" value="8" disabled></td>
          <td><input id="cell-80" name="cell-80" type="text" value="2" disabled></td>
        </tr>

      </table></center>

    </div>
						  </div>
						</div>
						</div>
						
	                    	<label for="">
	                    	
	                    	</label>
                        
                 
                   
	                   
	                </section>

	                <!-- SECTION 3 -->
	                <h4></h4>
	                <section>
	        <h3 class="padre">Realizar el Juego de Reinas 6x6</h3>
					<div class="padre">
	                   <div style="width: 450px;">
                            	Introduzca con una <b>R</b> el lugar de la reina.
	                    	
	                    	
						  <div style="text-align: right; width: 240px;">
						  <style type="text/css">
							  table {
        border: 2px solid #000000;
      }

      td {
        border: 1px solid #000000;
        text-align: center;
        vertical-align: middle;
      }

      input {
        color: #000000;
        padding: 0;
        border: 0;
        text-align: center;
        width: 48px;
        height: 48px;
        font-size: 24px;
        background-color: #FFFFFF;
        outline: none;
      }

      input:disabled {
        background-color: #EEEEEE;
      }

      #cell-0,  #cell-1,  #cell-2  { border-top:    2px solid #000000; }
      #cell-2,  #cell-11, #cell-20 { border-right:  2px solid #000000; }
      #cell-18, #cell-19, #cell-20 { border-bottom: 2px solid #000000; }
      #cell-0,  #cell-9,  #cell-18 { border-left:   2px solid #000000; }

      #cell-3,  #cell-4,  #cell-5  { border-top:    2px solid #000000; }
      #cell-5,  #cell-14, #cell-23 { border-right:  2px solid #000000; }
      #cell-21, #cell-22, #cell-23 { border-bottom: 2px solid #000000; }
      #cell-3,  #cell-12, #cell-21 { border-left:   2px solid #000000; }

      #cell-6,  #cell-7,  #cell-8  { border-top:    2px solid #000000; }
      #cell-8,  #cell-17, #cell-26 { border-right:  2px solid #000000; }
      #cell-24, #cell-25, #cell-26 { border-bottom: 2px solid #000000; }
      #cell-6,  #cell-15, #cell-24 { border-left:   2px solid #000000; }

      #cell-27, #cell-28, #cell-29 { border-top:    2px solid #000000; }
      #cell-29, #cell-38, #cell-47 { border-right:  2px solid #000000; }
      #cell-45, #cell-46, #cell-47 { border-bottom: 2px solid #000000; }
      #cell-27, #cell-36, #cell-45 { border-left:   2px solid #000000; }

      #cell-30, #cell-31, #cell-32 { border-top:    2px solid #000000; }
      #cell-32, #cell-41, #cell-50 { border-right:  2px solid #000000; }
      #cell-48, #cell-49, #cell-50 { border-bottom: 2px solid #000000; }
      #cell-30, #cell-39, #cell-48 { border-left:   2px solid #000000; }

      #cell-33, #cell-34, #cell-35 { border-top:    2px solid #000000; }
      #cell-35, #cell-44, #cell-53 { border-right:  2px solid #000000; }
      #cell-51, #cell-52, #cell-53 { border-bottom: 2px solid #000000; }
      #cell-33, #cell-42, #cell-51 { border-left:   2px solid #000000; }

      #cell-54, #cell-55, #cell-56 { border-top:    2px solid #000000; }
      #cell-56, #cell-65, #cell-74 { border-right:  2px solid #000000; }
      #cell-72, #cell-73, #cell-74 { border-bottom: 2px solid #000000; }
      #cell-54, #cell-63, #cell-72 { border-left:   2px solid #000000; }

      #cell-57, #cell-58, #cell-59 { border-top:    2px solid #000000; }
      #cell-59, #cell-68, #cell-77 { border-right:  2px solid #000000; }
      #cell-75, #cell-76, #cell-77 { border-bottom: 2px solid #000000; }
      #cell-57, #cell-66, #cell-75 { border-left:   2px solid #000000; }

      #cell-60, #cell-61, #cell-62 { border-top:    2px solid #000000; }
      #cell-62, #cell-71, #cell-80 { border-right:  2px solid #000000; }
      #cell-78, #cell-79, #cell-80 { border-bottom: 2px solid #000000; }
      #cell-60, #cell-69, #cell-78 { border-left:   2px solid #000000; }

    </style>
 <div class="container">
<table style="margin-top:2px; margin-left:65px;" id="grid">

     <tr>
          <td><input id="cell0" name="celda-0" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell1" name="celda-1" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell2" name="celda-2" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell3" name="celda-3" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell4" name="celda-4" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell5" name="celda-5" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
         </tr>

    <tr>
          <td><input id="cell6" name="celda-6" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell7" name="celda-7" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell8" name="celda-8" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell9" name="celda-9" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell10" name="celda-10" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell11" name="celda-11" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
     </tr>
          <tr>
          <td><input id="cell12" name="celda-12" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell13" name="celda-13" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell14" name="celda-14" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell15" name="celda-15" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell16" name="celda-16" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell17" name="celda-17" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>

     </tr>
          <tr>
          <td><input id="cell18" name="celda-18" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell19" name="celda-19" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell20" name="celda-20" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell21" name="celda-21" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell22" name="celda-22" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell23" name="celda-23" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
     </tr>
              <tr>
          <td><input id="cell24" name="celda-24" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell25" name="celda-25" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell26" name="celda-26" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell27" name="celda-27" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell28" name="celda-28" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell29" name="celda-29" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
     </tr>
              <tr>
          <td><input id="cell30" name="celda-30" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell31" name="celda-31" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell32" name="celda-32" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell33" name="celda-33" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell34" name="celda-34" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
          <td><input id="cell35" name="celda-35" max-length="1" onkeyup="this.value = this.value.toUpperCase(); " placeholder="" pattern="[R]" type="text"></td>
     </tr>

      </table>

    </div>
						  </div>
						</div>
                        <button class="button button4" name="btn_enviar">Finalizar Cuestionario</button>
						</div>
						
	                    	<label for="">
	                    	
	                    	</label>
                        
                 

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
