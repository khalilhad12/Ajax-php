<?php
if(isset($_POST['etdcivilite'])){
	require("connexion.php");
	$res=$idcon->exec("insert into etudiants (civilite,nom,prenom,email,photo,tel) values ('".$_POST['etdcivilite']."','".$_POST['etdnom']."','".$_POST['etdprenom']."','".$_POST['etdemail']."','".$_POST['etdphoto']."','".$_POST['etdtel']."')");
	
	if($res){
		echo "success,Enregistrement ajouté avec succès";
	}
	else{
		echo "error,Enregistrement n'est pas ajouté !!!";
	}
	$idcon=NULL;
}
?>