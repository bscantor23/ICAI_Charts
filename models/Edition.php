<?php
class Edition
{
  private $idEdition;
  private $name;
  private $year;

  public function Topic($idEdition = 0, $name = "", $year = "")
  {
    $this->idEdition = $idEdition;
    $this->name = $name;
    $this->year = $year;
  }

  public function getIdEdition()
  {
    return $this->idEdition;
  }

  public function setIdEdition($idEdition = 0)
  {
    $this->idEdition = $idEdition;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name = "")
  {
    $this->name = $name;
  }
  
  public function getYear()
  {
    return $this->year;
  }

  public function setYear($year = "")
  {
    $this->year = $year;
  }
}
