<html>
<head>
<title>DETAIL DE RESERVATION</title>
</head>
<body>

<?php
  $i=0;
  echo"<h1>DETAIL DES RESERVATIONS</h1>";

  echo"<p> <form method='post' action='traitement.php'>";

      while($i < $Nombre_de_places)
        {
          echo "<br/><br/>
          <label for='Nom'>Nom</label>
          <input type='text' name='Nom'/>

          <br/><br/>
          <label for='Age'>Age</label>
          <input type='text' name='Age'/>";
          $i++;
        }

          echo"<br/><br/>
          <input type='submit' value='Etape suivante'/ >
          <input type='submit' value='Retour à la page précédente'/>
          <input type='submit' value='Annuler la reservation'/>

          </form>  </p>";

?>
</body>
</html>
