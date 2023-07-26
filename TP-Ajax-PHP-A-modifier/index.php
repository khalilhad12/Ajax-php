<?php 
header( 'content-type: text/html; charset=iso-8859-1' );
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TP AJAX & PHP</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-icons.css">
<link rel="stylesheet" href="css/jquery.toast.min.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">
<div class="row">
    	<div class="col-8 p-2 bg-primary text-white mt-3 mb-3"><h2>TP AJAX & PHP</h2></div>
        <div class="col-4 p-2 bg-primary text-end mt-3 mb-3"><input type="text" id="searchid" class="form-control" placeholder="Search..." /></div>
        
</div>
<div class="row">
<div class="col-12 p-2 mt-3 mb-3"><button type="button" class="btn btn-success" id="btnajouter" data-bs-toggle='modal' data-bs-target='#Modalajouter'>Ajouter Etudiant(e)</button></div>
</div>
<div id="divcontenu">

</div>

</div>
<script src="js/jQuery_v3.6.3_min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.toast.min.js"></script>
<script src="js/script.js"></script>
<!-- Fenêtre Modale pour afficher les informations d'un enregistrement selectionné -->
<div class="modal fade" id="Modalafficher">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Informations de l'Etd</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
        <div class="row" id="infoetd">
        	                    
        </div>
       
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- Fenêtre Modale pour supprimer un enregistrement selectionné -->
<div class="modal fade" id="Modalsupprimer">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Suppression d'un enregistrement</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
        	<div class=" col-12 text-center" id="supprimeretd">
            </div>                      
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <button type="button" class="btn btn-danger" id="btnsupprimer" >Supprimer</button>
       <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
      </div>

    </div>
  </div>
</div>
<!-- Fenêtre Modale pour modifier les informations d'un enregistrement selectionné -->
<div class="modal fade" id="Modalmodifier">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modification d'un enregistrement</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row" id="modifieretd">
        	                        
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <button type="button" class="btn btn-primary" id="btnmodifier" >Modifier</button>
       <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>
<!-- Fenêtre Modale pour ajouter un enregistrement -->
<div class="modal fade" id="Modalajouter">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ajouter un enregistrement</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row" id="ajouteretd">
        	                        
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <button type="button" class="btn btn-success" id="btnajouteretd" >Ajouter</button>
       <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>
</body>
</html>