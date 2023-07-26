$.noConflict();
jQuery(document).ready(function($) {
	contenutabetd("#divcontenu");
	//fonction pour recuperer le contenu de la table etudinats via la méthode load
	/*function contenutabetd(element){
		$(element).load("contenutabetd.php");
	}*/
	//fonction pour recuperer le contenu de la table etudinats via la méthode get
	/*function contenutabetd(element){
		$.get("contenutabetd.php", function(data){
			$(element).html(data);
			});
	}*/
	//fonction pour recuperer le contenu de la table etudinats via la méthode ajax
	function contenutabetd(element){
		/*$.ajax({
			url:'contenutabetd.php',
			success: function(data){
				$(element).html(data);
			}
		});*/
		$("#searchid").keyup(function(){
			var name=$("#searchid").val();
			$.ajax({
				type: "POST",
				url: "searchetd.php",
				data: {'name' : name},
				success: function(data)
				{
					 $(element).html(data);
				}
			 });
		});
		
	}


//script pour afficher les details de l'etd via load
/*$(document).on('click','a[data-role=afficher]',function(){
		 var param="id="+$(this).attr('id');
		$("#infoetd").load("infoetd.php",param);
    });*/
//script pour afficher les details de l'etd via Get
/* $(document).on('click','a[data-role=afficher]',function(){
		 var param="id="+$(this).attr('id');
		 $.get("infoetd.php",param,function(data){
			 $("#infoetd").html(data);
		 });
    });	*/
//script pour afficher les details de l'etd via Ajax
 $(document).on('click','a[data-role=afficher]',function(){
	 var id=$(this).attr('id');
	 $.ajax({
	 	url:'infoetd.php',
		method:'GET',
		data:{id:id},
		success: function(data){
			$("#infoetd").html(data);
		}
	 });
    });
	
//script pour supprimer un enregistrement sélectionné  
 	$(document).on('click','a[data-role=supprimer]',function(){
		 var id=$(this).attr('id');
		$("#supprimeretd").html("Voulez vous supprimer l'enregistrement d'id : <span id='suppetd'>"+id+"</span>");
    });
    
	$("#btnsupprimer").click(function(){
		var id=$("#suppetd").text();
		$.ajax({
				url:'supprimeretd.php',
				method:'POST',
				data:{id:id},
				success: function(data){
					var chaine=data.trim();
					var tab=chaine.split(",");
					if(tab[0]==="success"){ msgsuccess(tab[1]);}
					if(tab[0]==="error") {msgerror(tab[1]);}
					$("#Modalsupprimer").modal('toggle');
					contenutabetd("#divcontenu");
				},
				error: function(){
					msgerror("Script n'existe pas !!!!!!");
					$("#Modalsupprimer").modal('toggle');
				}
			 });	
	});		
//script pour modifier un enregistrement sélectionné  
 $(document).on('click','a[data-role=modifier]',function(){
	 var id=$(this).attr('id');
	 $.ajax({
	 	url:'modifieretd.php',
		method:'GET',
		data:{id:id},
		success: function(data){
			$("#modifieretd").html(data);
		}
	 });
    });
	
$("#btnmodifier").click(function(){
	var valide=true;	
		for (var i=0;i<5;i++)
		{		
		if(($("#etd"+i).val()).trim()=="")
			{
				$("#err"+i).text("Champ requis !!!");
				valide=false;
			}
			else{
				$("#err"+i).text("");
			}
		}
	//Validation structure champ e-mail
	if(($("#etd3").val()).trim()!=""){	
	var mailReg = /^[a-z0-9._%+-]+\@[a-z0-9.-]+\.[a-z]{2,4}$/gi;
	if(!$("#etd3").val().match(mailReg)){
				$("#err3").text("non valide");
				valide=false;
		}
		else{
				$("#err3").text("");
		}
	}
	
	// Validation structure champ téléphone
	if(($("#etd4").val()).trim()!=""){
		var telReg = /^[0][0-9]{9}$/gi;
			if(!$("#etd4").val().match(telReg)){
					$("#err4").text("contient des chiffres uniquement");
					valide=false;
			}
			else{
			$("#err4").text("");
		}
	 }	
 //Modification de l'enregistrement au sein de la BD
		if(valide==true){
			var id=$("#etdid").val();
			var etdcivilite=$("#etd0").val();
			var etdnom=$("#etd1").val();
			var etdprenom=$("#etd2").val();
			var etdemail=$("#etd3").val();
			var etdtel=$("#etd4").val();
			
			
			$.ajax({
				url:'modifieretdconf.php',
				method:'POST',
				data:{id:id,etdcivilite:etdcivilite,etdnom:etdnom,etdprenom:etdprenom,etdemail:etdemail,etdtel:etdtel},
				success: function(data){
					var chaine=data.trim();
					var tab=chaine.split(",");
					if(tab[0]==="success"){msgsuccess(tab[1]);}
					if(tab[0]==="error") {msgerror(tab[1]);}
					$("#Modalmodifier").modal('toggle');
					contenutabetd("#divcontenu");
					
				},
				error: function(){
					msgerror("Script n'existe pas !!!!!!");
					$("#Modalmodifier").modal('toggle');
					
				}
			 });
			$("#etdid").val("");
			$("#etd0").val("");
			$("#etd1").val("");
			$("#etd2").val("");
			$("#etd3").val("");
			$("#etd4").val("");
			id=etdcivilite=etdnom=etdprenom=etdemail=etdtel="";
		}	
	return valide;
});

//script pour ajouter un enregistrement  
$("#btnajouter").click(function(){
	 $.ajax({
	 	url:'ajouteretd.php',
		success: function(data){
			$("#ajouteretd").html(data);
		}
	 });
});

$("#btnajouteretd").click(function(){
	var valide=true;	
		for (var i=0;i<6;i++)
		{	
		if(($("#etdd"+i).val()).trim()=="")
			{
				$("#errajout"+i).text("Champ requis !!!");
				valide=false;
			}
			else{
				$("#errajout"+i).text("");
			}
		}
	//Validation structure champ e-mail
	if(($("#etdd3").val()).trim()!=""){	
	var mailReg = /^[a-z0-9._%+-]+\@[a-z0-9.-]+\.[a-z]{2,4}$/gi;
	if(!$("#etdd3").val().match(mailReg)){
				$("#errajout3").text("non valide");
				valide=false;
		}
		else{
				$("#errajout3").text("");
		}
	}
	
	// Validation structure champ téléphone
	if(($("#etdd4").val()).trim()!=""){
		var telReg = /^[0][0-9]{9}$/gi;
			if(!$("#etdd4").val().match(telReg)){
					$("#errajout4").text("contient des chiffres uniquement");
					valide=false;
			}
			else{
			$("#errajout4").text("");
		}
	 }	
	//Validation taille, extension ... photo
	//split() convertir une chaine vers un tableau via un separateur 
	//la méthode pop(), permet de recuperer l'extension.
	if(($("#etdd5").val()).trim()!=""){
		var file_name = $('#etdd5')[0].files[0].name;
		var fileExtension = file_name.split('.').pop();
		var tabext=["jpg","png","PNG","JPG","jpeg"];
		if(tabext.indexOf(fileExtension) !=-1){
			   var file_size = $('#etdd5')[0].files[0].size;
			   if(file_size>800000)
				{
					$("#errajout5").text("Fichier trop volumineux !!!");
					valide=false;
				}
				else{
					$("#errajout5").text("");
				}
			   
		} else{
			   	$("#errajout5").text("Extension n'est pas autorisée !!!");
				valide=false;
		}
	 }
 //Insertion de l'enregistrement au sein de la BD
		if(valide==true){
			var etdcivilite=$("#etdd0").val();
			var etdnom=$("#etdd1").val();
			var etdprenom=$("#etdd2").val();
			var etdemail=$("#etdd3").val();
			var etdtel=$("#etdd4").val();
			var etdphoto=$('#etdd5')[0].files[0].name;

			
			 $.ajax({
				url:'ajouteretdconf.php',
				method:'POST',
				data:{etdcivilite:etdcivilite,etdnom:etdnom,etdprenom:etdprenom,etdemail:etdemail,etdtel:etdtel,etdphoto:etdphoto},
				success: function(data){
					var chaine=data.trim();
					var tab=chaine.split(",");
					if(tab[0]==="success"){ msgsuccess(tab[1]);}
					if(tab[0]==="error") {msgerror(tab[1]);}
					$("#Modalajouter").modal('toggle');
					contenutabetd("#divcontenu");
					
				},
				error: function(){
					msgerror("Script n'existe pas !!!!!!");
					$("#Modalajouter").modal('toggle');
					
			
				}
			 });
			$("#etdd0").val("");			
			$("#etdd1").val("");
			$("#etdd2").val("");
			$("#etdd3").val("");
			$("#etdd4").val("");
			$('#etdd5').val("");
			etdcivilite=etdnom=etdprenom=etdemail=etdtel=etdphoto="";
		}	
	
		
	return valide;
});
	//Message success
	function msgsuccess(txtsuccess){
		$.toast({
		  heading: 'Success',
		  text:txtsuccess,
		  showHideTransition: 'slide',
		  icon: 'success',
		  loaderBg: '#f96868',
		  position: 'top-center'
   	 });
	}	
	//Message error
	function msgerror(txterror){
		$.toast({
		  heading: 'Error',
		  text:txterror,
		  showHideTransition: 'slide',
		  icon: 'error',
		  loaderBg: '#f96868',
		  position: 'top-center'
		});
	}	
	  
});
