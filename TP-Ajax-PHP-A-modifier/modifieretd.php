<?php
if(isset($_GET['id']) ){
		require("connexion.php");
		$req="select * from etudiants where id=".$_GET['id']."";
		$res=$idcon->query($req);
		$resobj=$res->fetch(PDO::FETCH_OBJ);
?>		
		<div class="col-md-12 text-end">
        		<div class="form-group">
                	<img src="img/<?php echo $resobj->photo; ?>" id="etdimg" class="rounded-circle"/>
				</div>
       		</div>
        <div class="col-md-6">
        	<div class="form-group">
        		<label class="col-form-label col-form-label-sm" for="clientCity">ID : </label><br>
                <input type="text"  id="etdid" class="form-control" readonly value="<?php echo $resobj->id; ?>">
             </div>
       		</div>
       		
                                           
			<div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" for="clientCity">Civilité: </label><span class="text-danger" id="err0"></span><br>
                    <input type="text" name="etdcivilite"  id="etd0" class="form-control"  value="<?php echo $resobj->civilite; ?>">
				</div>
       		 </div>
             
       		<div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" for="clientCity">Nom: </label><span class="text-danger" id="err1"></span><br>
                    <input type="text" id="etd1"  name="etdnom" class="form-control"  value="<?php echo $resobj->nom; ?>">
				</div>
			</div>
            
         	<div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" for="clientCity">Prénom: </label><span class="text-danger" id="err2"></span><br>
                    <input type="text"  id="etd2" name="etdprenom" class="form-control" value="<?php echo $resobj->prenom; ?>">
				</div>
        	</div>
            
         	<div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" for="clientCity">E-mail: </label><span class="text-danger" id="err3"></span><br>
                    <input  type="text" id="etd3" name="etdemail" class="form-control" value="<?php echo $resobj->email; ?>">
				</div>
        	</div>    
            <div class="col-md-6">
        		<div class="form-group">
        			<label class="col-form-label col-form-label-sm" for="clientCity">Téléphone: </label><span class="text-danger" id="err4"></span><br>
                    <input  type="text" id="etd4" name="etdtel" class="form-control" value="<?php echo $resobj->tel; ?>">
				</div>
        	</div>   
		
		
<?php			
	$res->closeCursor();
	$idcon=NULL;
}
?>
