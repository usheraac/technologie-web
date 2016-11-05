<html>
<head>
<title>DETAIL DE RESERVATION</title>
</head>
<body>


    <h1>DETAIL DES RESERVATIONS</h1>

        <form method='post' action='traitement.php'>
    <?php
      $i=1;
      foreach($Liste_de_voyageur as $voyageur)
        {
        ?>
          <br/><br/>
          <label for='Nom'>Nom</label>
          <input type='text' name='<?php echo "Nom$i"; ?>' value='<?php echo $voyageur->getNom(); ?>'/><?php  #if (isset($NomErr.$i){echo $NomErr.$i;
          #} else{$NomErr.$i='';} ?>

          <br/><br/>
          <label for='Age'>Age</label>
          <input type='number' name='<?php echo "Age$i"; ?>' value='<?php echo $voyageur->getAge(); ?>'/><?php #if (isset($AgeErr.$i)){echo $AgeErr.$i;
          #} else{$AgeErr.$i='';} ?>


      <?php  $i++; } ?>

          <br/><br/>
          <input type='submit' name='Etape_suivante_detail' value='Etape suivante'/ >
          <input type='submit' name='Retour_a_la_page_precedente_detail' value='Retour à la page précédente'/>
          <input type='submit' name='Annuler_la_reservation_detail' value='Annuler la reservation'/>

          </form>  </p>

</body>
</html>
