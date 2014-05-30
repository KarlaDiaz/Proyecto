<?php
class x
{
	var $host = "localhost";
	var $user = "root";
	var $pass = "";
	var $bd = "proyectohci";
	
	function conectar()
	{
		if(mysql_connect($this->host,$this->user,$this->pass))
		{
			//echo "conectado al servidor";
			if(mysql_select_db($this->bd))
			{
				//echo "conectado al base de datos";
			}
		}
	}
	
	function Login($Usuario, $Contrasenia)
	{
		mysql_query("SET NAMES 'UTF8'");
		$sql=mysql_query("SELECT * FROM alta WHERE Usuario='".htmlentities($Usuario)."' AND Contrasenia='".htmlentities($Contrasenia)."';");
		
		if(mysql_num_rows($sql)<=0)
		{
			echo"<script>location.href='../Pwd.html';
					alert('Usuario no Valido');
				</script>";
		}
		else
		{
			while($reg=mysql_fetch_assoc($sql))
			{
				$NomUsuario=$reg['Nombre'];
			}
			session_start();
            $_SESSION["autentica"] = "OK";
            $_SESSION["usuarioactual"] = $Usuario;
			$_SESSION["nombre_usuario"] = $NomUsuario;
			
			echo"<script>location.href='../index_2.php';</script>";
			
			/*switch($Perfil)
			{
				case '1':
				echo"<script>location.href='Admin/Panel.php';</script>";
				break;
				
				case '2':
				echo"<script>location.href='Consulta/Panel.php';</script>";
				break;
				
				case '3':
				echo"<script>location.href='Soporte/PanelSoporte.php';</script>";
				break;
			}*/
		}
	}//FUNCION PARA LOGIN

	
}
?>