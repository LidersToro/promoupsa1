<?php
session_start();
$grupo = $_POST['grupo'];
$_SESSION['grupo'] = $grupo;

$tipodeexamen = $_SESSION['examen'];

require_once __DIR__.'/../modelo/Examen1Modelo.php';

$Obj = new Examen1Modelo();
$Obj->setGrupo($grupo);
$a = $Obj->getGrupo();

	$row = $Obj->obtenerNota($grupo);
	$fila1 = $row->fetch_row();	

	if($tipodeexamen =='a')
	{
	  if($fila1[1]=='')
	  {  //sigunifica que no existe el usuario porlo tando crea uno nuevo
		$Obj->adicionarNombre();
		header("location: /promoupsa1/vista/Examen1form1.php");
	  }
		else 
		{
			if($fila1[2]==0 )
			{	//significa que si existe el usuario pero no ha dado el examen que le toque 
				header("location: /promoupsa1/vista/Examen1form1.php");
			}
			else
			{
				header("location: /promoupsa1/vista/index1.php");
			}
		}
	}
	if($tipodeexamen =='b')
	{
	  if($fila1[1]=='')
	  {  //sigunifica que no existe el usuario porlo tando crea uno nuevo
		$Obj->adicionarNombre();
		header("location: /promoupsa1/vista/Examen2form2.php");
	  }
		else 
		{
			if($fila1[3]==0 )
			{	//significa que si existe el usuario pero no ha dado el examen que le toque 
				header("location: /promoupsa1/vista/Examen2form2.php");
			}
			else
			{
				header("location: /promoupsa1/vista/index2.php");
			}
		}
	}
	if($tipodeexamen =='c')
	{
	  if($fila1[1]=='')
	  {  //sigunifica que no existe el usuario porlo tando crea uno nuevo
		$Obj->adicionarNombre();
		header("location: /promoupsa1/vista/Examen3form3.php");
	  }
		else 
		{
			if($fila1[4]==0 )
			{	//significa que si existe el usuario pero no ha dado el examen que le toque 
				header("location: /promoupsa1/vista/Examen3form3.php");
			}
			else
			{
				header("location: /promoupsa1/vista/index3.php");
			}
		}
	}
	if($tipodeexamen =='d')
	{
	  if($fila1[1]=='')
	  {  //sigunifica que no existe el usuario porlo tando crea uno nuevo
		$Obj->adicionarNombre();
		header("location: /promoupsa1/vista/Examen4form4.php");
	  }
		else 
		{
			if($fila1[5]==0 )
			{	//significa que si existe el usuario pero no ha dado el examen que le toque 
				header("location: /promoupsa1/vista/Examen4form4.php");
			}
			else
			{
				header("location: /promoupsa1/vista/index4.php");
			}
		}
	}





	?>


















/*
session_start();
$grupo = $_POST['grupo'];

$_SESSION['grupo'] = $grupo;
require_once __DIR__.'/../modelo/Examen1Modelo.php';

$ObjEx1 = new Examen1Modelo();

$rows2 = $ObjEx1->validacionnombre($nombre);

$fila2 = mysql_num_rows($rows2);

    if ($fila2>0) {   // validacion solo del nombre si existe que vuelva a la pagina de inicio por que ya existe ese usuario 
       header("locatio:/../vista/mainn.html");
      }else{    // caso contrario que ingrese un nuevo grupo en la base de datos 
          $ObjEx1->setNombre($grupo);
          $ObjEx1->setRespuesta1($clave);
          $ObjEx1->adicionar();
          require_once __DIR__. '/../vista/Examen1form1.php';
      }
  

  if($_POST['promo']=='b')
  {
      require_once __DIR__. '/../vista/Examen2form.php';
  }else {


   
  }
   if($_POST['promo']=='c')
    {
      require_once __DIR__. '/../vista/Examen3form.php';
    }else{

    }
     










/*if(isset($_POST['btn_examen1']))
{
    require_once __DIR__. '/../vista/Examen1form.php';

}
if(isset($_POST['btn_examen2']))
{
    require_once __DIR__. '/../vista/Examen2form.php';
}
if(isset($_POST['btn_examen3']))
{
    require_once __DIR__. '/../vista/Examen3form.php';
}*/
