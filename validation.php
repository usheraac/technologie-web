<html>
<head>
<title>Validation</title>
</head>
<body>



    <h1>VALIDATION DE LA  RESERVATIONS</h1>
    <table style='width:100%'>
      <tr>
        <th>titre</th>
        <th>valeur</th>

      </tr>
      <tr>
        <td>Destination:</td>
        <td><?php echo $reservation->getDestination(); ?> </td>
      </tr>
      <tr>
        <td>Nombres de places:</td>
        <td><?php echo $reservation->getNombre_de_places(); ?> </td>
      </tr>
<?php

  foreach($Liste_de_voyageur as $voyageur){

?>
    <tr>
        <td>Nom:</td>
        <td><?php echo $voyageur->getNom(); ?> </td>
      </tr>
      <tr>
        <td>Age:</td>
        <td> <?php echo $voyageur->getAge();?> </td>
      </tr>";
<?php
  }
?>
<form method='post' action='traitement.php'>
<br/><br/>
<input type='submit' name='confirmation' value='Confirmer'/ >
<input type='submit' name='Retour_a_la_page_precedente_validation' value='Retour à la page précédente'/>
<input type='submit' name='Annuler_la_reservation_validation' value='Annuler la reservation'/>

</form>  </p>



</table>
</body>
</html>
