<?php

if(isset($_POST['id'])){
	require("connexion.php");
		$res1=$idcon->exec("update etudiants set civilite='".$_POST['etdcivilite']."', nom='".$_POST['etdnom']."',prenom='".$_POST['etdprenom']."',email='".$_POST['etdemail']."',tel='".$_POST['etdtel']."' where id='".$_POST['id']."'");
		if($res1){
			echo "success,Enregistrement modifié avec succès";
		}
		else{
			echo "error,Enregistrement n'est pas modifié !!!";
		}
	$idcon=NULL;
}
	
?>
