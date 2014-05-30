<?php
class XXX{
	var $host="localhost";
	var $user="root";
	var $pass="";
	var $bd="itgam";
	
//**************************************  CONECTAR A LA BASE DE DATOS   ***************************************************
	function conectar()
	{
		if(mysql_connect($this->host,$this->user,$this->pass))
		{
			//echo"Estas conectado con la base";
			if(mysql_select_db($this->bd))
			{
			//echo"La base de datos es correcta";
			}
		}
	}	
}
?>