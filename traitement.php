<?php
session_start();

	//include class definition
	include'models.php';

	//instanciation of a new object
	if(!isset($_SESSION['reservation'])){
		$reservation = new reservation();
	} else{
		$reservation =$_SESSION['reservation'];
	}


 	//var_dump($_SESSION['reservation']);
	//var_dump($reservation);
	//definie variables and
	$Destination="";
	$DestinationErr="";
	$Nombre_de_places ="";
	$Nombre_de_placesErr="";
	$Assurance_annulation="";
	$Assurance_annulationErr="";



	//redirection en fonction du bouton appuyé

	//gestion du boutton Etape suivante

	 if(isset($_POST["Etape_suivante_reservation"])){

	 		$Etape_suivante=$_POST["Etape_suivante_reservation"];


		//recuperation des variables du formulaire
		if (isset($_POST["Destination"])&&(strlen($_POST["Destination"])>=1)){
			$reservation->setDestination($_POST["Destination"]);


		} else{
			$DestinationErr ="Destination is required";
		}

		if(isset($_POST["Nombre_de_places"])&& (strlen($_POST["Nombre_de_places"])>=1) ){
			$reservation->setNombre_de_places($_POST["Nombre_de_places"]);




		} else{
			$Nombre_de_placesErr ="Nombre de place is required";
		}

		if(isset($_POST["Assurance_annulation"]) ){
			$reservation->setAssurance_annulation($_POST["Assurance_annulation"]);
		} else {
			$Assurance_annulationErr="Assurance annulation is required";
		}



		//test de l'entrée de valeurs dans les champs du formulaire
		if ((strlen($Assurance_annulationErr)!=0 )||(strlen($Nombre_de_placesErr)!=0)||(strlen($DestinationErr)!=0)){

				include 'reservation.php';

		}else{

			$n=0;
			while($n < $Nombre_de_places)
			{
				if(!isset($_SESSION['personne'.$n])){
					$personne.$n = new Personne();
				}else{
					$personne.$n = $_SESSION['personne'.$n];
				}
				$n++;
				var_dump($n);
				var_dump($reservation);
			}

				include 'detail.php';
			}

			//sauvegarde des objets
			$_session['reservation'] = $reservation;

		}


		//gestion du bouton Annuler la reservation
		if(isset($_POST["Annuler_la_reservation"])){

			include'annulation_reservation.php';

		}
   //annulation_reservation.php
	 if( isset($_POST["oui_reservation"])){
		 //remove all session variables
			session_unset();
			//destroy the session_start
			session_destroy();
			include'reservation.php';
	 } elseif(isset($_POST["non_reservation"])) {
		 include'reservation.php';

	 } elseif($_SERVER["REQUEST_METHOD"] == "GET"){
		 include'reservation.php';
	 }
?>
