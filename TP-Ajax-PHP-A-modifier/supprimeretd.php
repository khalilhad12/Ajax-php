
<?php
if(isset($_POST['id'])){
	require("connexion.php");
	//$res2=$idcon->exec("delete from etudiants where id=15");
	$res2=$idcon->exec("delete from etudiants where id='".$_POST['id']."'");
	if($res2){
		echo "success,Enregistrement supprimé avec succès";
	}
	else{
		echo "error,Enregistrement n'est pas supprimé !!!";
	}
	$idcon=NULL;
}
?>