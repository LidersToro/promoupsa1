<?php
session_start();
require_once __DIR__.'/../modelo/Examen1Modelo.php';
$respuesta1       = $_POST['resp1'];
$respuesta2  = $_POST['resp2'];
$respuesta3     = $_POST['resp3'];
$respuesta4      = $_POST['resp4'];
$respuesta5      = $_POST['resp5'];
$respuesta6     = $_POST['resp6'];
$respuesta7      = $_POST['resp7'];
$respuesta8      = $_POST['resp8'];


$Obj = new Examen1Modelo();

if(isset($_POST['btn_enviar']))
{				
				 $nota = 0;
					
					if($respuesta1 == 'b')
					{
					  $nota = $nota + 14;
					}
					if($respuesta2 == 'c')
					{
					  $nota = $nota + 14;
					}
					if($respuesta3 == 'a')
					{
					  $nota = $nota + 14;
					}
					if($respuesta4 == 'd')
					{
					  $nota = $nota + 14;
					}
					if($respuesta5 == 'b')
					{
					  $nota = $nota + 14;
					}
					if($respuesta6 == 'c')
					{
					  $nota = $nota + 14;
					}
					if($respuesta7 == 'c')
					{
					  $nota = $nota + 16;
				  
					}
					
					$Obj->setExamen4($nota);
					$aux = $Obj->getExamen4();
					$Obj->modificarExamen4($aux,$_SESSION['grupo']);





			echo "<!DOCTYPE html>\n";
			echo "<html>\n";
			echo "  <head>\n";
			echo "      <meta charset=\"utf-8\">\n";
			echo "      <title>PROMO UPSA</title>\n";
			echo "      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
			echo "      <meta name=\"author\" content=\"colorlib.com\">\n";
			echo "      <style>\n";
			echo "      .button {\n";
			echo "      background-color: #FFBF00; \n";
			echo "      border: none;\n";
			echo "      color: white;\n";
			echo "      font-weight: bold;\n";
			echo "      padding: 20px;\n";
			echo "      text-align: center;\n";
			echo "      text-decoration: none;\n";
			echo "      display: inline-block;\n";
			echo "      font-size: 15px;\n";
			echo "      margin: 4px 2px;\n";
			echo "      cursor: pointer;\n";
			echo "      }\n";
			echo "      .button1 {border-radius: 2px;}\n";
			echo "      .button2 {border-radius: 4px;}\n";
			echo "      .button3 {border-radius: 8px;}\n";
			echo "      .button4 {border-radius: 40px;}\n";
			echo "      .button5 {border-radius: 50%;}\n";
			echo "      .p{\n";
			echo "       margin: 1rem;\n";
			echo "       padding: 1rem;\n";
			echo "       border: 2px ;\n";
			echo "       /* IMPORTANTE */\n";
			echo "       text-align: center;";
			echo "      font-weight:bold;\n";
			echo "      font-size: 30px;\n";
			echo "      }\n";
			echo "      </style>";
			echo "      \n";
			echo "      <!-- MATERIAL DESIGN ICONIC FONT -->\n";
			echo "      <link rel=\"stylesheet\" href=\"fonts/material-design-iconic-font/css/material-design-iconic-font.css\">\n";
			echo "\n";
			echo "      <!-- STYLE CSS -->\n";
			echo "      <link rel=\"stylesheet\" href=\"css/style.css\">\n";
			echo "  </head>\n";
			echo "<body>\n";
			echo "      <div class=\"wrapper\">\n";
			echo "          <div class=\"image-holder\">\n";
			echo "              <img src=\"images/logo.png\" alt=\"\">\n";
			echo "          </div>\n";
			echo "            <form action=\"Examen4Controlador4.php\" method=\"POST\">\n";
			echo "              <div class=\"form-header\">\n";
			echo "                  <a href=\"#\">#Promo UPSA cuestionario online</a>\n";
			echo "                  <h3>Carrera de Ingenieria Industrial y de Sistemas</h3>\n";
			echo "                  <h3>Nombre del Grupo : ".$_SESSION['grupo']."</h3>\n";
			echo "              </div>\n";
			echo "              <div id=\"wizard\">\n";
			echo "                  <div class=\"p\">\n";
			echo "                  <h1>Nota:</h1>\n";
			echo "                  <h1>$nota</h1>\n";
			echo "                  <br>\n";
			echo "                  <button class=\"button button4\" name=\"btn_mostrar\">Ver Notas</button>";
			echo "                  <button class=\"button button4\" name=\"btn_promedio\">Ver Promedio</button>";
			echo "                  </div>\n";
			echo "              </div>\n";
			echo "            </form>\n";
			echo "      </div>\n";
			echo "\n";
			echo "      \n";
			echo "</body>";

			echo "</html>";


  }

