<?php
class Edition
{
  private $papers;
  private $accepted;
  private $rejected;
  private $percentage_acepted;
  private $percentage_rejected;

  public function Topic($papers = 0,$accepted = 0,$rejected = 0,$percentage_acepted = "",$percentage_rejected = "")
  {
    $this->papers = $papers;
    $this->accepted = $accepted;
    $this->rejected = $rejected;
    $this->percentage_acepted = $percentage_acepted;
    $this->percentage_rejected = $percentage_rejected;
  }

  public function getPapers()
  {
    return $this->papers;
  }

  public function setPapers($papers = 0)
  {
    $this->papers = $papers;
  }

  public function getAccepted()
  {
    return $this->accepted;
  }

  public function setAccepted($accepted = 0)
  {
    $this->accepted = $accepted;
  }

  public function getRejected()
  {
    return $this->rejected;
  }

  public function setRejected($rejected = 0)
  {
    $this->rejected = $rejected;
  }

  public function getPercentage_acepted()
  {
    return $this->percentage_acepted;
  }

  public function setPercentage_acepted($percentage_acepted = "")
  {
    $this->percentage_acepted = $percentage_acepted;
  }
  
  public function getPercentage_rejected()
  {
    return $this->percentage_rejected;
  }

  public function setPercentage_rejected($percentage_rejected = "")
  {
    $this->percentage_rejected = $percentage_rejected;
  }

}
