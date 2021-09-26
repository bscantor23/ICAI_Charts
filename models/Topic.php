<?php
class Topic
{
  private $idTopic;
  private $name;

  public function Topic($idTopic = 0, $name = "")
  {
    $this->idTopic = $idTopic;
    $this->name = $name;
  }

  public function getIdTopic()
  {
    return $this->idTopic;
  }

  public function setIdTopic($idTopic = 0)
  {
    $this->idTopic = $idTopic;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name = "")
  {
    $this->name = $name;
  }
}
