<?php
class reservation
{
    private $Destination ;
    private $Nombre_de_places;
    private $Assurance_annulation;
    private $Voyageur;


    //GETTER
    public function getDestination()
    {
      return $this->Destination;
    }

    public function getNombre_de_places()
    {
      return $this->Nombre_de_places;
    }


    public function getAssurance_annulation()
    {
      return $this->Assurance_annulation;

    }

    public function getVoyageur()
    {
      return $this->Voyageur;
    }

    //SETTER
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
    }

    public function setNombre_de_places($Nombre_de_places)
    {
      $this->Nombre_de_places = $Nombre_de_places;
    }

    public function setAssurance_annulation($Assurance_annulation)
    {
      $this->Assurance_annulation =$Assurance_annulation;
    }

    public function setVoyageur($Voyageur)
    {
      $this->Voyageur =$Voyageur;
    }

}

class voyageur
{
  private $Nom;
  private $Age;

  //GETTER
  public function getNom()
  {
    return $this->Nom;
  }

  public function getAge()
  {
    return $this->Age;
  }

  //SETTER

      public function setNom($Nom)
      {
        $this->Nom = $Nom;
      }

      public function setAge($Age)
      {
        $this->Age=$Age;
      }



}
?>
