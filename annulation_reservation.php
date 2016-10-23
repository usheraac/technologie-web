<html>
  <head>
    <title>Annulation de la reservation</title>
  </head>
  <body>
    <?php
      echo"<h1>Voulez-vous vraiment annuler votre reservation? </h1>";

      echo "<form method='post' action='traitement.php'>
      <input type='submit' name='oui_reservation' value='OUI'>
      <input type='submit' name='non_reservation' value='NON'>

      </form>";
    ?>
  </body>
</html>
