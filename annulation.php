<?php
include  'models.php';
$n=1;
$liste= array();
for($n;$n<=10;$n++){
  $liste[$n] = new voyageur();
  $liste[$n]->setNom('usher'.$n)  ;
  $liste[$n]->setAge(10+$n);
  $a ='valeur';

}

foreach($liste as $voyageur)
{?>
  <br/><br/>
  <label for='Nom'>Nom</label>
  <input type='text' name='Nom' value='<?php echo "valeur$n"; ?>'/>

  <br/><br/>
  <label for='Age'>Age</label>
  <input type='number' name='Age' value='<?php    ?>'/>
 <?php   echo $a.$n;
  $n++;

  } ?>




 ?>
