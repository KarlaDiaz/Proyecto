<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>
	<hr />
<hr />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Procesamiento de Alta de Producto</title>
        <script language="javascript">
		function salir(){
			document.location.href='../Pwd.html';
		}
		</script>
	</head>
	<body>
    	<?php
			$Usuario = $_POST['TXT_Usuario'];
			$Contrasenia = $_POST['TXT_Contrasenia'];
			$Nombre = $_POST['TXT_Nombre'];
			$Paterno= $_POST['TXT_Paterno'];
			$Materno = $_POST['TXT_Materno'];
			$Control = $_POST['TXT_Control'];
			
			  	$SQL = "insert into alta values('".$Usuario."','".$Contrasenia."','".$Nombre."','".$Paterno."','".$Materno."','".$Control."')";
				header("Location: ../Pwd.html");
			  	/*print("<br>SQL: ".$SQL);*/
			  
			  	$link = mysql_connect ('localhost','root','');
			  	mysql_select_db('proyectohci',$link);
			  	/*print("<br>Conectando con el servidor MySQL y con la BD...");*/
  
			  	@mysql_query ($SQL);
			  	/*print("<br>Se ejecuto la sentencia SQL...");*/
  
			  	/*$resultado = mysql_query("select * from producto where Tipo='".$Tipo."'");
			  	print("<br>Se realizo la consulta y el resultado es: ");
			  	while($row=mysql_fetch_array($resultado))
			  	{ 
				  	print("<br>".$row['id_producto']." - ".$row['tipo']."...");
			  	}*/
						
		?>
