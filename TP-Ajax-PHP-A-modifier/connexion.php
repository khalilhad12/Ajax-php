<?php
require("config.php");
try{
	$dsn = 'mysql:host ='.HOST.';dbname='.BD;
	$idcon = new PDO($dsn,USER,PWD);
	$idcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $exp){
	echo"Erreur : ".$exp->getMessage();
	exit(); // die();
}
?>