<?php
require("connexion.php");
		$req="select * from etudiants";
		$res=$idcon->query($req);
		$nb=$res->rowCount();
		if($nb>0){
		$resobj=$res->fetchALL(PDO::FETCH_OBJ);
		echo"<table class='table table-bordered table-striped table-sm'>";
		echo"<tr class='bcolor fw-bold'><td>Id</td><td>Civilité</td><td>Nom</td><td>Prénom</td><td>E-mail</td><td>Actions</td></tr>";
		foreach($resobj as $key=>$val){
				echo"<tr>";
				echo"<td class='bcolor fw-bold'>".$val->id."</td>";
				echo"<td>".$val->civilite."</td>";
				echo"<td>".$val->nom."</td>";
				echo"<td>".$val->prenom."</td>";
				echo"<td>".$val->email."</td>";
				
				echo"<td align='center'>
				<a href='#' id='".$val->id."' class='text-success' data-role='afficher' data-bs-toggle='modal' data-bs-target='#Modalafficher'><i class='bi bi-eye-fill' title='Afficher'></i></a>
				&nbsp;&nbsp;&nbsp;
				<a href='#' id='".$val->id."' class='text-warning' data-role='modifier' data-bs-toggle='modal' data-bs-target='#Modalmodifier'><i class='bi bi-pencil-fill' title='Modifier'></i></a>
				&nbsp;&nbsp;&nbsp;
				<a href='#' id='".$val->id."' class='text-danger' data-role='supprimer' data-bs-toggle='modal' data-bs-target='#Modalsupprimer'><i class='bi bi-trash-fill' title='Supprimer'></i></a>
				</td>";
				echo"</tr>";
		}
	echo"</table>";
		}
		else{
			echo "La table est vide !!!!!";
		}
	$res->closeCursor();
	$idcon=NULL;
?>
