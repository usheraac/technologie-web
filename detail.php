<html>
<head>
<title>DETAIL DE RESERVATION</title>
</head>
<body>

<?php
  $i=0;
  echo"<h1>DETAIL DES RESERVATIONS</h1>";

  echo"<p> <form method='post' action='traitement.php'>";
      $Nombre_de_places = $reservation->getNombre_de_places();
      while($i < $Nombre_de_places)
        {
          echo "<br/><br/>
          <label for='Nom'>Nom</label>
          <input type='text' name='Nom' value='".$personne.$i->getNom()."'/>

          <br/><br/>
          <label for='Age'>Age</label>
          <input type='number' name='Age' value='".$personne.$i->getAge()."'/>";
          $i++;
        }

          echo"<br/><br/>
          <input type='submit' name='Etape_suivante_detail' value='Etape suivante'/ >
          <input type='submit' name='Retour_a_la_page_precedente_detail' value='Retour à la page précédente'/>
          <input type='submit' name='Annuler_la_reservation_detail' value='Annuler la reservation'/>

          </form>  </p>";

?>
</body>
</html>
