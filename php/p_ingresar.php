<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<?php
		include('conexiones.php');
		$function=new x;
		$function->conectar();
		
			$Usuario = $_POST['TXT_Usuario'];
			$Contrasenia = $_POST['TXT_Contrasenia'];

			if($Usuario == "" || $Contrasenia == ""){
				echo"<script>
					alert('Introduce el Usuario y password');
					location.href='../../Pwd.html';
				
				</script>
				";
			}
			else
			{
				$function->Login($Usuario,$Contrasenia);  	
			}
		?>
<!--
$link = mysql_connect ('localhost','root','');
			  	mysql_select_db('proyectohci',$link);
			  	//print("<br>Conectando con el servidor MySQL y con la BD...");
    
			  	$resultado = mysql_query("select Usuario, Contrasenia from alta where Usuario=('".$Usuario."') and Contrasenia=('".$Contrasenia."')");
			  	print("<br>Se realizo la consulta y el resultado es: ");
			  	while($row=mysql_fetch_array($resultado)){ 
					//print("<br>".$row['TXT_Usuario']);
				}
                
                -->