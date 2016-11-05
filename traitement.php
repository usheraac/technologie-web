<?php
session_start();

	//include class definition
	include'models.php';

	//instanciation of a new object
	if(!isset($_SESSION['reservation'])){
		$reservation = new reservation();
		$Liste_de_voyageur = array();
	} else{
		$reservation = unserialize($_SESSION['reservation']);
		$liste_de_voyageur = $reservation->getVoyageur();

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
	$Nom ="";
	$Age ="";
	$NomErr ="Nom";
	$AgeErr ="Age";
	$controle = true;



	//redirection en fonction du bouton appuyé

	//gestion du boutton Etape suivante

	 if(isset($_POST["Etape_suivante_reservation"])){

	 		$Etape_suivante=$_POST["Etape_suivante_reservation"];
			#$Retour_a_la_page_precedente_detail =$_POST["Retour_a_la_page_precedente_detail"]

		//recuperation des variables du formulaire
		if(isset($_POST["Destination"])&& (strlen($_POST["Destination"])>=1)){
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
			$n=1;
			$Nombre_de_places = $reservation->getNombre_de_places();

		for($n;$n<=$Nombre_de_places;$n++){
				$Liste_de_voyageur[$n] = new voyageur();
				#$NomErr.$n="";
				#$AgeErr.$n="";


		}


				include 'detail.php';
			}





			}
#gestion de l'etape suivante de la page detail

			if(isset($_POST["Etape_suivante_detail"])){

				$n=1;
				for($n;$n<=$Nombre_de_places;$n++){
					if (isset($_POST["Nom$n"])&& (strlen($_POST[ "Nom$n"])>=1) && isset($_POST[ "Age$n"])&& (strlen($_POST[ "Age$n"])>=1)){
						$Liste_de_voyageur[$n]->setNom($_POST[ "Nom$n"]);
						$Liste_de_voyageur[$n]->setAge($_POST[ "Age$n"]);
					}else{
						$NomErr.$n ="the traveler's name is required";
						$AgeErr.$n ="the traveler's age is required";
						$controle = false;
					}

				}
				if (!$controle){
					include 'detail.php';
				}else{

				}

				$reservation->setVoyageur($liste_de_voyageur);
				var_dump($_POST);
				var_dump($Liste_de_voyageur);
	 	 }



		 //sauvegarde des objets
		 $_SESSION['reservation'] = serialize($reservation);
		 var_dump($reservation);

		//gestion du bouton Annuler la reservation
		if(isset($_POST["Annuler_la_reservation"])  || isset($_POST["Annuler_la_reservation_detail"]) ){

			include'annulation_reservation.php';

		}
   //annulation_reservation.php
	 if( isset($_POST["oui_reservation"]) ){
		 //remove all session variables
			session_unset();
			//destroy the session_start
			session_destroy();
	 } elseif(isset($_POST["non_reservation"])) {
		 include'reservation.php';

	 } elseif(($_SERVER["REQUEST_METHOD"] == "GET")|| isset($_POST["Retour_a_la_page_precedente_detail"])){
		 include'reservation.php';
	 }





?>
