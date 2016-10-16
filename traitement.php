<?php
//definie variables and 
$Destination="";
$DestinationErr="";
$Nombre_de_places=0;
$Nombre_de_placesErr="";
$Assurance_annulation="";
$Assurance_annulationErr="";


//include 'reservaton.php';

 //if($_SERVER["RESQUEST_METHOD"] == "POST"){
	
	//recuperation des variables du formulaire
	if (isset($_POST["Destination"])&&(strlen($_POST["Destination"])>=1)){
		$Destination =$_POST["Destination"];
	} else{
		$DestinationErr ="Destination is required";
	}
	
	if(isset($_POST["Nombre_de_places"])&& (strlen($_POST["Nombre_de_places"])>=1) ){
		$Nombre_de_places=$_POST["Nombre_de_places"];
	} else{
		$Nombre_de_placesErr ="Nombre de place is required";
	}
	if(isset($_POST["Assurance_annulation"]) ){
		$Assurance_annulation=$_POST["Assurance_annulation"];
	} else {
		$Assurance_annulationErr="Assurance annulation is required";
	}
	
	
	//redirection en fonction du bouton appuyé
	if(isset($_POST["Etape_suivante"])){
		
		$Etape_suivante=$_POST["Etape_suivante"];
		
		if ((strlen($Assurance_annulationErr)!=0 )||(strlen($Nombre_de_placesErr)!=0)||(strlen($DestinationErr)!=0)){
			//echo $Assurance_annulationErr."<br>";
			//echo $Nombre_de_placesErr."<br>";
			//echo $DestinationErr."<br>";
			//echo $Assurance_annulation;
			//echo $Nombre_de_places."<br>";
			//echo $Destination."<br>";
			include 'reservation.php';
		} elseif(isset($_POST["Annulation_reservation"])){
			
		}else{
			include 'detail.php';
		}
			
	}
	
		
	
	
	
		//}
?>
