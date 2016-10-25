<html>
<head>
<title> RESERVATION</title>
</head>
<body>


  <h1>RESERVATION</h1>
  <h2>Le prix de la place et de 10 euros jusqu'a 12 ans et ensuite de 15 euros</h2>
  <h2>Le prix de l'assuracnce annulation est de 20 euros quel que soit le nombre de voyageurs</h2>

  <p>
    <form method='post' action='traitement.php'>

      <br/><br/>
      <label for='Destination'> Destination</label>
      <input type='text' name='Destination' id='Destination' value='<?php echo 	$reservation->getDestination(); ?>' /> <?php if (isset($DestinationErr) ){
		 echo $DestinationErr;
	  } else {echo $DestinationErr="";} ?>

      <br/><br/>
      <label for='Nombre_de_places'>Nombre de places</label>
      <input type='number' name='Nombre_de_places' id='Nombre_de_places' value='<?php echo 	$reservation->getNombre_de_places(); ?>' /> <?php if(isset($Nombre_de_placesErr)){
		  echo $Nombre_de_placesErr;
	  } else{ $Nombre_de_placesErr="";}  ?>

      <br/><br/>
      <label for='Assurance_annulation'>Assurance annulation</label>
      <input type='checkbox' name='Assurance_annulation' value='<?php echo $reservation->getAssurance_annulation(); ?>' /> <?php if (isset($Assurance_annulationErr)){
		echo $Assurance_annulationErr;
	  } else{echo $Assurance_annulationErr="";}  ?>

      <br/><br/>
      <input type='submit' name='Etape_suivante_reservation' value='Etape suivante' onclick ="<?php $Etape_suivante_reservation=1;?>" <?php $Etape_suivante_reservation=0;?> >
      <input type='submit' name='Annuler_la_reservation' value='Annuler la reservation' onclick="<?php $Annuler_la_reservation = 1; ?>" <?php $Annuler_la_reservation = 0;?> >



      </form>


</body>
</html>
