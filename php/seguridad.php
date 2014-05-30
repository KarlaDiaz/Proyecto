<?php
@session_start();
if($_SESSION["autentica"] != "OK")
{
	header("Location: Pwd.html");
	exit();
}
?>